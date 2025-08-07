<?php
include 'dbConfig.php';

// Fetch all products
$stmt = $DB_con->prepare("SELECT * FROM products ORDER BY id DESC");
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Products with Modal Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" crossorigin="anonymous" />
    <style>
        .thumbnail-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }
        .color-box {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 1px solid #333;
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">All Products</h2>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Stock</th>
                <th>Unit Price</th>
                <th>Selling Price</th>
                <th>Category</th>
                <th>Size</th>
                <th>Colors</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($products): ?>
                <?php foreach ($products as $row):
                    $product_id = $row['id'];

                    // Fetch sizes and colors from attributes table
                    $attrStmt = $DB_con->prepare("SELECT sizes, colors FROM attributes WHERE product_id = ?");
                    $attrStmt->execute([$product_id]);
                    $attribute = $attrStmt->fetch(PDO::FETCH_ASSOC);

                    $sizes = $attribute['sizes'] ?? '';
                    $colors = $attribute['colors'] ?? '';
                    $colorArray = explode(',', $colors);

                    // Fetch category name
                    $category_name = "N/A";
                    if (!empty($row['category_id'])) {
                        $catStmt = $DB_con->prepare("SELECT category_name FROM categories WHERE id = ?");
                        $catStmt->execute([$row['category_id']]);
                        $category_name = $catStmt->fetchColumn();
                    }
                ?>
                <tr>
                    <td><img src="uploads/<?php echo htmlspecialchars($row['product_image']); ?>" class="thumbnail-img" alt="Product Image"></td>
                    <td><?php echo htmlspecialchars($row['product_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['description']); ?></td>
                    <td><?php echo (int)$row['stock_amount']; ?></td>
                    <td><?php echo (int)$row['unit_price']; ?></td>
                    <td><?php echo (int)$row['selling_price']; ?></td>
                    <td><?php echo htmlspecialchars($category_name); ?></td>
                    <td><?php echo $sizes ? htmlspecialchars($sizes) : 'N/A'; ?></td>
                    <td>
                        <?php if ($colors): ?>
                            <?php foreach ($colorArray as $color): ?>
                                <span class="color-box" style="background-color: <?php echo htmlspecialchars($color); ?>" title="<?php echo htmlspecialchars($color); ?>"></span>
                            <?php endforeach; ?>
                        <?php else: ?>
                            ---
                        <?php endif; ?>
                    </td>
                    <td>
                        <!-- View Details Modal Trigger -->
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#productModal<?php echo $product_id; ?>">
                            View Details
                        </button>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="productModal<?php echo $product_id; ?>" tabindex="-1" role="dialog" aria-labelledby="productModalLabel<?php echo $product_id; ?>">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo htmlspecialchars($row['product_name']); ?></h4>
                      </div>
                      <div class="modal-body">
                        <img src="uploads/<?php echo htmlspecialchars($row['product_image']); ?>" class="img-responsive img-thumbnail" style="width:100%; max-height:300px; object-fit:cover;" alt="Product Image">

                        <p><strong>Description:</strong> <?php echo htmlspecialchars($row['description']); ?></p>
                        <p><strong>Stock:</strong> <?php echo (int)$row['stock_amount']; ?></p>
                        <p><strong>Unit Price:</strong> ₹<?php echo (int)$row['unit_price']; ?></p>
                        <p><strong>Selling Price:</strong> ₹<?php echo (int)$row['selling_price']; ?></p>
                        <p><strong>Category:</strong> <?php echo htmlspecialchars($category_name); ?></p>
                        <p><strong>Sizes:</strong> <?php echo $sizes ? htmlspecialchars($sizes) : 'N/A'; ?></p>
                        <p><strong>Colors:</strong>
                            <?php if ($colors): ?>
                                <?php foreach ($colorArray as $color): ?>
                                    <span class="color-box" style="background-color: <?php echo htmlspecialchars($color); ?>" title="<?php echo htmlspecialchars($color); ?>"></span>
                                <?php endforeach; ?>
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="10" class="text-center">No products found!</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>

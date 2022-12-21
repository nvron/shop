<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./public/css/style.css">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <style>
        .ron {
            margin-left: 76%;
        }

        .add-quantity,
        .minus-quantity {
            align-items: center;
            background: #f5f5fa;
            border: 0;
            border-radius: 8px;
            box-shadow: -10px -10px 30px 0 #fff, 10px 10px 30px 0 #1d0dca17;
            box-sizing: border-box;
            color: #2a1f62;
            cursor: pointer;
            display: flex;
            font-family: "Cascadia Code", Consolas, Monaco, "Andale Mono", "Ubuntu Mono", monospace;
            font-size: 1rem;
            justify-content: center;
            line-height: 1.5rem;
            padding: 15px;
            position: relative;
            text-align: left;
            transition: .2s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: pre;
            width: max-content;
            word-break: normal;
            word-spacing: normal;
        }

        .add-quantity:hover,
        .minus-quantity:hover {
            background: #f8f8ff;
            box-shadow: -15px -15px 30px 0 #fff, 15px 15px 30px 0 #1d0dca17;
        }

        @media (min-width: 768px) {
            .button-67 {
                padding: 24px;
            }
        }
        .min{
            padding: 15px;
        }
    </style>

    <?php include 'inc/header.php'; ?>

    <!-- card -->
    <div class="cart">
        <div class="container cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>


                <?php $cart_list = get_cart() ?>
                <?php foreach ($cart_list as $order_detail) { ?>
                    <!-- single cart -->
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="<?php echo $order_detail['img']; ?>" alt="">
                                <div>
                                    <p class="d-md-block d-sm-block d-none"><?php echo $order_detail['name']; ?></< /p>
                                        <br>
                                        <small>Price: $<?php echo $order_detail['price']; ?></small>
                                        <br>
                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                        <button type="submit" class="fas fa-trash"></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td class="d-flex">
                            <form action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="value" value="-1">
                                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                <button class="add-quantity" type="submit">-</button>
                            </form>
                            <div class="h-8 w-10 flex items-center justify-center">
                               <div class="min"> <?php echo $order_detail['quantity']; ?></div>
                            </div>
                            <form action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="value" value="1">
                                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                <button class="minus-quantity" type="submit">+</button>
                            </form>
                        </td>
                        <td>$<?php echo total_cart_item($order_detail['price'], $order_detail['quantity']); ?></td>
                    </tr>
                    <tr>
                    <?php } ?>
            </table>
        </div>

        <div class="total-price container">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$<?php echo total_cart(); ?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0</td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td>$<?php echo total_cart(); ?></td>
                </tr>


            </table>
        </div>
        <div class="ron">
            <a href="checkout.php" class="primary-btn">PROCEED TO CHECKOUT</a>

        </div>
    </div>
    </div>
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</body>

</html>
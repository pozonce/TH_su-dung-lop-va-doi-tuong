<?php
class Product {
    public $name;
    public $price;
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
    public function getDiscountedPrice($discountPercent) {
        $discountedPrice = $this->price * (1 - $discountPercent / 100);
        return round($discountedPrice, 2);
    }
}
$product = new Product('áo strit goe', 1890);
$discountedPrice = $product->getDiscountedPrice(12.2);
echo 'Tên sản phẩm: ' . $product->name . '<br>';
echo 'Giá gốc: ' . $product->price . ' k<br>';
echo 'Giá sau khi áp dụng chiết khấu: ' . $discountedPrice . ' k';

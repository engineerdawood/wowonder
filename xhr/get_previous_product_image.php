<?php 
if ($f == 'get_previous_product_image') {
    $html = '';
    if (!empty($_GET['before_image_id'])) {
        $data_image  = array(
            'product_id' => $_GET['product_id'],
            'before_image_id' => $_GET['before_image_id']
        );
        $wo['image'] = Wo_ProductImageData($data_image);
        if (!empty($wo['image'])) {
            $html = Wo_LoadPage('lightbox/product-content');
        }
        $data = array(
            'status' => 200,
            'html' => $html
        );
    }
    header("Content-type: application/json");
    echo json_encode($data);
    exit();
}

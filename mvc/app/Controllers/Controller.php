<?php 
namespace App\Controllers;
use eftec\bladeone\BladeOne;
class Controller
{
  protected function views($viewFlie, $data = []){
    // Xác định đường dẫn thư mục chứa file view
    $view = __DIR__.'/../../resources/views'; 
    // Xác định đường dẫn đến thức chứa file view đã biên dịch
    $cache = __DIR__.'/../../storage/cache'; 
    // Khởi tạo đối tượng bladeone
    $blade = new BladeOne($view, 
    $cache,
    BladeOne::MODE_DEBUG);
    echo $blade->run($viewFlie, $data);
  }
}
?>
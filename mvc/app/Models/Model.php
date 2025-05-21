<?php 
class Model{
    // Ý tưởng: Tạo 1 lớp có kết nối csdl sẵn có và
    // cho các các trong model khác kế thừa
    // Chia làm 2 phần:
    // 1. Ý tưởng và viết code *
    // 2. Cải tiến thêm
    // Tài nguyên cần cấp
    // Kết nối đến csdl MySQL = PDO
    private $host = "localhost"; //địa chỉ mysql server sẽ kết nối đến
    private $dbname="web3014.03"; //tên database sẽ kết nối đến
    private $username = "root"; //username để kết nối đến database 
    private $password = ""; // mật khẩu để kết nối đến database
    // Tạo thuộc tính kết nối
    private $pdo;
    // thuôc tính lưu trữ câu lệnh sql
    private $sql;
    // Tạo thuộc tính lưu trữ kết quả
    private $sta;
    // Tạo phương thức khởi tạo
    public function __construct(){
        // Gọi phương thức kết nối csdl
        $this->pdo = $this->getConnection();
    }
    // Viết phương thức kết nối csdl
    private function getConnection(){
        try{
            $connection = new PDO(
                "mysql:host=$this->host; 
                dbname=$this->dbname;", 
                $this->username,
                $this->password, 
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                ]
            );
            return $connection;
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
    }
    // Nhận câu lện sql
    public function setSql($sql){
        $this->sql = $sql;
    }
    // Thực thi câu lệnh sql
    public function execute($options = []){
        try{
            $this->sta = $this->pdo->prepare($this->sql);
            // Kiểm tra nếu có tham số truyền vào
            if(!empty($options)){
                // Thực thi câu lệnh sql với tham số truyền vào
                foreach($options as $key => $value){
                    $this->sta->bindValue($key+1, $value);
                    // dùng bindValue để gán giá trị cho tham số
                    // Tự động xác định kiểu dữ liệu
                }
            }
            // Thực thi câu lệnh sql
            $this->sta->execute();
            // Trả về kết quả
            return $this->sta;
        }catch(PDOException $exception){
            echo "Error: " . $exception->getMessage();
        }
    }
}

?>
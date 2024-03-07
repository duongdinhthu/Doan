<?php
setcookie("status", "active", time() + 3600, "/");
ini_set('display_errors', 'off');
class projectFptHappy
{
    private $conn;

    public function __construct()
    {
        $host = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "fpthappy";
        $this->conn = new mysqli($host, $username, $password, $dbname);
//check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    public function __destruct()
    {
        $this->conn->close();
    }


    public function changePassword($username,$password,$password2)
    {
        if ($this->isUpExists($username,$password) == 1){
            $sql ="UPDATE account_admin SET password ='$password2' where username='$username';";
            $this->conn->query($sql);
            echo"You have successfully changed your password on admin";
        }else if($this->isUpExists1($username,$password) == 1){
            $sql ="UPDATE account_staffs SET password ='$password2' where username='$username';";
            $this->conn->query($sql);
            echo"You have successfully changed your password on staff";
        }else if($this->isUpExists2($username,$password) == 1) {
            $sql = "UPDATE account_customer SET password ='$password2' where username='$username';";
            $this->conn->query($sql);
            echo "You have successfully changed your password on custormer";
        }else{
            echo"You have failed your pasword";
            header("Location:changePassword.php");
        }
    }
    public function addAcountAdmin($username, $password)
    {
        if ($this->isUpExists($username,$password) == null) {
            if ($this->isUpExists1($username,$password) == null) {
                if ($this->isUpExists2($username,$password) == null) {
                    $sql = "INSERT INTO account_admin(username,password) VALUES ( ?, ?)";
                    $stmt = $this->conn->prepare($sql);// thực hiện bảo vệ trước tân công
                    $stmt->bind_param("ss", $username, $password);
                    if ($stmt->execute()) {
                        echo "User name $username added successfully";
                    } else {
                        echo "Failed to add user: " . $stmt->error;
                    }
                } else {
                    echo " User name $username already exists ,please try again!\n";
                    header("Location:login.php");
                }
            } else {
                header("Location:login.php");
                echo " User name $username already exists ,please try again!\n";
            }
        }else{
            header("Location:login.php");
            echo "Username $username already exists , please try again!\n";
        }
    }
    public function addAccountCustomer($username, $password,$id,$gia,$sl)
    {
        if ($this->isUExists($username) == null) {
            if ($this->isUExists1($username) == null) {
                if ($this->isUExists2($username) == null) {
                    $sql = "INSERT INTO account_customer(username,password) VALUES ( ?, ?)";
                    $stmt = $this->conn->prepare($sql);// thực hiện bảo vệ trước tân công
                    $stmt->bind_param("ss", $username, $password);
                    if ($stmt->execute()) {
                        header("Location:http://localhost:63342/Doan/backend/cart.php?username=".$username."&gia=".$gia."&id=".$id."&sl=".$sl);
                    } else {
                        echo "Failed to add user: " . $stmt->error;
                    }
                } else {
                    echo " User name $username already exists ,please try again!\n";
                }
            } else {
                echo " User name $username already exists ,please try again!\n";
            }
        }else{
            echo "Username $username already exists , please try again!\n";
        }
    }
    public function addAccountCustomer1($username, $password)
    {
        if ($this->isUExists($username) == null) {
            if ($this->isUExists1($username) == null) {
                if ($this->isUExists2($username) == null) {
                    $sql = "INSERT INTO account_customer(username,password) VALUES ( ?, ?)";
                    $stmt = $this->conn->prepare($sql);// thực hiện bảo vệ trước tân công
                    $stmt->bind_param("ss", $username, $password);
                    if ($stmt->execute()) {
                        echo "User name $username added successfully";
                    } else {
                        echo "Failed to add user: " . $stmt->error;
                    }
                } else {
                    echo " User name $username already exists ,please try again!\n";
                }
            } else {
                echo " User name $username already exists ,please try again!\n";
            }
        }else{
            echo "Username $username already exists , please try again!\n";
        }
    }
    public function addAccountStaff($username,$password)
    {
        if ($this->isUExists($username) == null) {
            if ($this->isUExists1($username) == null) {
                if ($this->isUExists2($username) == null) {
                    $sql = "INSERT INTO account_staffs(username,password) VALUES ( ?, ?)";
                    $stmt = $this->conn->prepare($sql);// thực hiện bảo vệ trước tân công
                    $stmt->bind_param("ss", $username, $password);
                    if ($stmt->execute()) {
                        echo "User name $username added successfully";
                    } else {
                        echo "Failed to add user: " . $stmt->error;
                    }
                } else {
                    echo " User name $username already exists,please try again!\n";
                }
            } else {
                echo " User name $username already exists,please try again!\n";
            }
        }else{
                echo " User name $username already exists,please try again!\n";
        }
    }
    private function isUExists($username){
        $sql = "SELECT * FROM account_admin WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row=$result->num_rows>0;
        return $row;
    }
    private function isUExists1($username){
        $sql = "SELECT * FROM account_staffs WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row=$result->num_rows>0;
        return $row;
    }
    private function isUExists2($username){
        $sql = "SELECT * FROM account_customer WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row=$result->num_rows>0;
        return $row;
    }
    private function isUpExists($username,$password)
    {
        $sql = "SELECT * FROM account_admin WHERE username = ? and password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username,$password);
        $stmt->execute();
        $result = $stmt->get_result();
        $row=$result->num_rows>0;
        return $row;
    }
    private  function isUpExists1($username,$password)
    {
        $sql = "SELECT * FROM account_staffs WHERE username = ? and password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username,$password);
        $stmt->execute();
        $result = $stmt->get_result();
        $row=$result->num_rows>0;
        return $row;
    }
    private  function isUpExists2($username,$password)
    {
        $sql = "SELECT * FROM account_customer WHERE username = ? and password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username,$password);
        $stmt->execute();
        $result = $stmt->get_result();
        $row=$result->num_rows>0;
        return $row;
    }
    public function accountAdmin($username,$password)
    {
        $sql = "SELECT * FROM account_admin where username = ? and password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows==1){
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;

            echo"login thanh cong";
            header("Location:fpthappy.php");
        }else{
            $this->accountStaff($username,$password);
        }
    }
    public function accountStaff($username,$password)
    {
        $sql = "SELECT * FROM account_staffs where username = ? and password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $row = $result->fetch_assoc();
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];
            echo"login thanh cong";
            header("Location:fpthappy1.php");
        }else{
            $this->accountCustomer($username,$password);
        }
    }
    public function accountCustomer($username,$password)
    {
        $sql = "SELECT * FROM account_customer where username = ? and password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $row = $result->fetch_assoc();
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];
            echo"login thanh cong";
            header("Location:home.php");
        }else{
            echo"login that bai, vui long  kiem tra lai<br>";
        }
    }
    public function accountCustomer1($username,$password,$id,$gia,$sl)
    {
        $sql = "SELECT * FROM account_customer where username = ? and password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $row = $result->fetch_assoc();
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];
            echo"login thanh cong";
            header("Location:http://localhost:63342/Doan/backend/cart.php?gia=".$gia."&id=".$id."&sl=".$sl);
            exit();
        }else{
            echo"login that bai, vui long  kiem tra lai<br>";
        }
    }
    public function checkPermission($code)
    {
        $sql = "select * from code_permissions where id = ? ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s",$code);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows==1){
            while($row = $result->fetch_assoc()) {
                $position = $row["position"];
                if($position==1){

                    header("Location:register.php");
                }else if($position==0){

                    header("Location:register1.php");
                }
            }
        }else if($result->num_rows==0){
            header("Location:register2.php");
        }
    }
    public function checkCartByCustormer($username)
    {
        $sql = "select * from cart c join production_products pp
         on c.product_id = pp.product_id
         join sales_customers sc on c.customer_id = sc.customer_id
         where username='$username'";
        $result = $this->conn->prepare($sql);
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;
    }





    function runQuery($query) {
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function numRows($query) {
        $result  = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
    public function getAllProduct1()
    {
        $products = [];
        $sql = "select * from product WHERE code = 'TP' and status='stocking'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
            $products[]=$row;
            }
        }
        return $products;
    }
    public function getAllProduct2()
    {
        $products = [];
        $sql = "select * from product where code = 'CN' and status='stocking'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $products[]=$row;
            }
        }
        return $products;
    }
    public function getAllProduct3()
    {
        $products = [];
        $sql = "select * from product where code = 'TY' and status='stocking'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $products[]=$row;
            }
        }
        return $products;
    }
    public function getAllProduct4()
    {
        $products = [];
        $sql = "select * from product where code = 'TOUR' and status='stocking'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $products[]=$row;
            }
        }
        return $products;
    }
    public function getAllProduct5()
    {
        $products = [];
        $sql = "select * from product where code = 'PACKAGE' and status='stocking'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $products[]=$row;
            }
        }
        return $products;
    }

    public function getAllProduct6()
    {
        $products = [];
        $sql = "select * from product where code = 'ORGANIZATIONAL' and status='stocking'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $products[]=$row;
            }
        }
        return $products;
    }
    public function calculate(){
        $sql = "UPDATE cart SET total_price = list_price * quantity";
        $this->conn->query($sql);
    }
    public function checkProductByCart($username,$id,$sl,$price)
    {
        $sql="select * from cart where username='$username' and product_id='$id' and hidden = 1";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            ?>
            <script>

                swal({
                    title: "Success",
                    text: "Data insertd",
                    icon: "success",
                });



            </script>
<?php
        }else{
            $this->addCart2($username,$id,$sl,$price);
           ?>
            <script>

                swal({
                    title: "Failed",
                    text: "Data not insertd",
                    icon: "error",
                });



            </script>
<?php
        }
    }
    public function addCart2($username,$id,$sl,$price)
    {
        $sql = "insert into cart(username,product_id,quantity,list_price)values('$username','$id','$sl','$price')";
        $this->conn->query($sql);
    }
    public function getAllCart($username)
    {   $carts = [];
        $sql = " select p.image,c.product_id,p.pid,p.name,c.list_price,SUM(c.quantity),c.quantity,SUM(c.total_price),c.total_price from cart c join product p on c.product_id = p.pid where username = '$username' and hidden = 1 GROUP BY product_id, username";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;
    }
    public function totalCart($username){
        $sql="UPDATE cart SET total = (SELECT SUM(total_price) FROM cart where username = '$username' and hidden = 1) ";
        $this->conn->query($sql);
    }
    public function totalShow($username)
    {

        $sql = "SELECT total FROM cart where username = '$username' and hidden = 1";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $totalcart=$row['total'];
            }
        }else{
            echo '<style> #check{ display: none; } </style>';
        }
        return $totalcart;
    }
    public function deleCode()
    {
        $sql = "DELETE FROM cart WHERE code IS NULL ;";
        $result = $this->conn->query($sql);
    }
    public function getAllDeleteCart($username)
    {   $carts = [];
        $sql = " select p.image,c.product_id,p.name,c.list_price,SUM(c.quantity),c.total_price from cart c join product p on c.product_id = p.pid where c.username = '$username' and c.hidden = 0 GROUP BY product_id, username";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;
    }
    public function deleteItemByCart($id)
    {
        $sql = "update cart set hidden = 0 where product_id = '$id' and hidden = 1";
        $this->conn->query($sql);
    }
    public function returnItemByCart($id)
    {
        $sql = "update cart set hidden = 1 where product_id = '$id' and hidden = 0";
        $this->conn->query($sql);
    }
    public function deleteItem($id)
    {
        $sql = "delete from cart where product_id = '$id' and hidden = 0";
        $this->conn->query($sql);
    }
    public function generateRandomCode() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $random_code = '';
        $length = 8;

        for ($i = 0; $i < $length; $i++) {
            $random_code .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $random_code;
    }
    public function payTheBill($name,$phone,$address,$username,$cod,$code)
    {
        $sql = "update cart set hidden = 2, hidden_customer = 4,name='$name',phone='$phone',address='$address',payment='$cod',code='$code' where username = '$username' and hidden = 1";
        $this->conn->query($sql);
    }
    public function getAllPay($username)
    {
        $carts = [];
        $sql = "select p.image,c.product_id,p.name,c.list_price,SUM(c.quantity),SUM(c.total_price),c.hidden ,c.hidden_customer,c.status,c.payment,c.code,c.trading_day from cart c join product p on c.product_id = p.pid where username = '$username'  and hidden = 1   GROUP BY product_id, username";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;
    }
    public function totalPayCart($username)
    {
        $sql="UPDATE cart SET total = (SELECT SUM(total_price) FROM cart where username = '$username' and hidden = 2) ";
        $this->conn->query($sql);
    }
    public function totalprice($username)
    {
        $sql="UPDATE cart SET total_price = quantity * list_price where username = '$username' ";
        $this->conn->query($sql);
    }
    public function totalShowPay($username)
    {
        $sql = "SELECT * FROM cart where username = '$username' and hidden = 2 and status = 'pend processing'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $totalcart=$row['total_pay'];
            }
        }
        return $totalcart;
    }
    public function deletePay($username){
        $sql = "update cart set hidden_customer = 1 where username = '$username' and hidden_customer = 4";
        $this->conn->query($sql);
    }
    public function totalPayAdm($day){

        $sql="UPDATE cart SET total_adm = (SELECT SUM(total_price) FROM cart where  hidden = 2 and trading_day='$day') ";
        $this->conn->query($sql);

    }
    public function oder1()
    {
        $carts = [];
        $sql = "select c.username,c.product_id,c.total_adm,p.name,c.list_price,SUM(c.quantity),SUM(c.total_price),c.status,c.payment,c.code,c.trading_day from cart c join product p on c.product_id = p.pid where  hidden = 2 and 
             trading_day BETWEEN '2024-02-28' AND '2024-03-28'  GROUP BY product_id, username ORDER BY trading_day ASC;" ;
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;
    }
    public function oder($to,$from,$status)
    {
        $carts = [];
        $sql = " SELECT DISTINCT code,username, payment,trading_day,status FROM cart where  hidden = 2 and status = '$status' and 
             trading_day BETWEEN '$from' AND '$to'  ORDER BY trading_day ASC;" ;
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;
    }
    public function statusDone( $code ,$username,$done,$day){
        $sql = "update cart set status = '$done' where code = '$code' and username = '$username' and trading_day='$day' ";
        $this->conn->query($sql);
    }
    public function statusDelivering( $code ,$username,$delivering,$day){
        $sql = "update cart set status = '$delivering' where code = '$code' and username = '$username' and trading_day='$day' ";
        $this->conn->query($sql);
    }
    public function inforCustomer(){
        $customer = [];
        $sql = "select * from account_customer
";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $customer[]=$row;
            }
        }
        return $customer;
    }
    public function inforCustomerByName($name){
        $customer = [];
        $sql = "select * from account_customer where name='$name' or username='$name' or phone='$name' or address='$name'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $customer[]=$row;
            }
        }
        return $customer;
    }
    public function updateInforCustomer($name1,$phone1,$address1,$username)
    {
        $sql = "update account_customer set name='$name1',phone='$phone1',address='$address1' where username = '$username' ";
        $this->conn->query($sql);

    }
    public function inforByUserName($username)
    {
        $customer = [];
        $sql="select * from account_customer where username='$username'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $customer[]=$row;
            }
        }
        return $customer;
    }

    public function inforCustomerByUser($username){
        $customer = [];
        $sql = "select * from account_customer where username='$username'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $customer[]=$row;
            }
        }
        return $customer;
    }
public function updateQuantity($quantity,$username,$product_id)
{
    $sql="UPDATE cart SET quantity='$quantity' where username='$username'and product_id='$product_id' and hidden = 1 ";
    $this->conn->query($sql);

}
public function addBook($name,$phone,$email,$address)
{
    $sql = "insert into book_tour(name,phone,email,address)values('$name','$phone','$email','$address')";
    $this->conn->query($sql);
}
    public function booktour($date,$status)
    {
        $carts = [];
        $sql = "select * from book_tour  where trading_day='$date' and status = '$status'" ;
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;
    }
    public function statusDoneBook( $name ,$phone,$email,$address,$done,$day)
    {
        $sql = "update book_tour set status = '$done' where name = '$name' and phone = '$phone' and email='$email' and address='$address' and trading_day='$day' ";
        $this->conn->query($sql);
    }
    public function statusDeliveringBook($name ,$phone,$email,$address,$consulting,$day)
    {
        $sql = "update book_tour set status = '$consulting' where name = '$name' and phone = '$phone' and email='$email' and address='$address' and trading_day='$day' ";
        $this->conn->query($sql);
    }
    public function codeOderCart($username)

    {
        $ordercarts = [];
        $sql = "SELECT DISTINCT code, status  FROM cart c  WHERE username = '$username';";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $ordercarts[]=$row;
            }
        }
        return $ordercarts;
    }
    public function detailCodeOrder($username,$code)
    {
        $orderDetail = [];
        $sql = "select p.image,c.product_id,p.name,c.list_price,SUM(c.quantity),SUM(c.total_price),c.hidden ,c.hidden_customer,c.status,c.payment,c.code,c.trading_day from cart c join product p on c.product_id = p.pid where username = '$username'  and hidden = 2 and c.code= '$code' GROUP BY product_id, username;";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $orderDetail[]=$row;
            }
        }
        return $orderDetail;
    }
    public function updateTotalByCode($username,$code)
    {
        $sql="UPDATE cart SET total_pay = (SELECT SUM(total_price) FROM cart where username = '$username' and hidden = 2 and code = '$code') ";
        $this->conn->query($sql);
    }
    public function totalShowByCode($username,$code)
    {
        $sql = "SELECT total_pay FROM cart where username = '$username' and hidden = 2 and code = '$code'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $totalcart=$row['total_pay'];
            }
        }
        return $totalcart;
    }
    public function oder2($day)
    {
        $carts = [];
        $sql = "select c.username,c.product_id,c.total_adm,p.name,c.list_price,SUM(c.quantity),SUM(c.total_price),c.status,c.payment,c.code,c.trading_day from cart c join product p on c.product_id = p.pid where  hidden = 2
            and trading_day='$day'  GROUP BY product_id, username ORDER BY trading_day ASC;" ;
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;
    }
    public function oder3()
    {
        $carts = [];
        $sql = "SELECT DISTINCT code,username, payment,trading_day,status FROM cart" ;
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;
    }
    public function oder4()
    {
        $carts = [];
        $sql = " select * FROM book_tour" ;
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;
    }
    public function addProduct($name,$price,$image,$type)
    {
        $sql="insert into product(name,price,image,code)values ('$name','$price','$image','$type');";
        $this->conn->query($sql);
        echo"Thêm sp thành công!";
    }
    public function showStaff()
    {
        $carts = [];
        $sql = " select * FROM account_staffs" ;
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;

    }
    public function statusStaff( $username,$status)
    {
        $sql="update account_staffs set status='$status' where username = '$username' ";
        $this->conn->query($sql);
    }
public function showProject()
{
    $carts = [];
    $sql="select * from product";
    $result = $this->conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $carts[]=$row;
        }
    }
    return $carts;
}
public function statusProduct( $id ,$status)
{
    $sql="update product set status='$status' where pid = '$id' ";
    $this->conn->query($sql);
}
public function updateInforProduct($id,$name,$price,)
{
    $sql="update product set name ='$name' , price = '$price' where pid = '$id'";
    $this->conn->query($sql);
    header("Location: add_product.php");

}
    public function updateInforProduct1($id,$name,$price,)
    {
        $sql="update product set name ='$name' , price = '$price' where pid = '$id'";
        $this->conn->query($sql);
        header("Location: add_product1.php");

    }
public function showInforProduct($id)
{
    $carts = [];
    $sql="select * from product where pid = '$id'";
    $result = $this->conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $carts[]=$row;
        }
    }
    return $carts;
}
    public function loading(){
        $customer = [];
        $sql = "select DISTINCT code from cart ";
        $result = $this->conn->query($sql);
        $numRows = $result->num_rows; // Lấy số hàng được lấy ra

        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $customer[] = $row;
            }
        }

        return ['numRows' => $numRows, 'customers' => $customer];
    }
    public function done(){
        $customer = [];
        $sql = "select DISTINCT code from cart where status='done'";
        $result = $this->conn->query($sql);
        $numRows = $result->num_rows; // Lấy số hàng được lấy ra

        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $customer[] = $row;
            }
        }

        return ['numRows' => $numRows, 'customers' => $customer];
    }
    public function delivering(){
        $customer = [];
        $sql = "select DISTINCT code from cart where status='delivering'";
        $result = $this->conn->query($sql);
        $numRows = $result->num_rows; // Lấy số hàng được lấy ra

        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $customer[] = $row;
            }
        }

        return ['numRows' => $numRows, 'customers' => $customer];
    }
    public function processing(){
        $customer = [];
        $sql = "select DISTINCT code from cart where status='pend processing'";
        $result = $this->conn->query($sql);
        $numRows = $result->num_rows; // Lấy số hàng được lấy ra

        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $customer[] = $row;
            }
        }

        return ['numRows' => $numRows, 'customers' => $customer];
    }
    public function customer(){
        $customer = [];
        $sql = "select username from account_customer";
        $result = $this->conn->query($sql);
        $numRows = $result->num_rows; // Lấy số hàng được lấy ra

        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $customer[] = $row;
            }
        }

        return ['numRows' => $numRows, 'customers' => $customer];
    }
    public function totalBook(){
        $customer = [];
        $sql = "select id from book_tour";
        $result = $this->conn->query($sql);
        $numRows = $result->num_rows; // Lấy số hàng được lấy ra

        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $customer[] = $row;
            }
        }

        return ['numRows' => $numRows, 'customers' => $customer];
    }
    public function totalBooksuc(){
        $customer = [];
        $sql = "select id from book_tour where status='done'";
        $result = $this->conn->query($sql);
        $numRows = $result->num_rows; // Lấy số hàng được lấy ra

        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $customer[] = $row;
            }
        }

        return ['numRows' => $numRows, 'customers' => $customer];
    }
    public function totalBookcon(){
        $customer = [];
        $sql = "select id from book_tour where status='consulting'";
        $result = $this->conn->query($sql);
        $numRows = $result->num_rows; // Lấy số hàng được lấy ra

        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $customer[] = $row;
            }
        }

        return ['numRows' => $numRows, 'customers' => $customer];
    }
    public function totalBookpen(){
        $customer = [];
        $sql = "select id from book_tour where status='pend processing'";
        $result = $this->conn->query($sql);
        $numRows = $result->num_rows; // Lấy số hàng được lấy ra

        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $customer[] = $row;
            }
        }

        return ['numRows' => $numRows, 'customers' => $customer];
    }


}

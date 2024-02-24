<?php
setcookie("status", "active", time() + 3600, "/");

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
    public function addAccountCustomer($username, $password)
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
            header("Location:dashboard.php");
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
            header("Location:dashboard1.php");
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
        $sql = "select * from product WHERE (pid BETWEEN 1 AND 16) OR (pid BETWEEN 41 AND 48); ";
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
        $sql = "select * from product where pid BETWEEN 17 AND 40";
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
        $sql = "select * from product where pid BETWEEN 201 AND 204";
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
        $sql = "select * from product where pid BETWEEN 205 AND 208";
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
        $sql = "select * from product where pid BETWEEN 51 AND 78";
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
        $sql = "select * from product where pid BETWEEN 209 AND 212";
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
    public function addCart2($username,$id,$sl,$price)
    {
        $sql = "insert into cart(username,product_id,quantity,list_price)values('$username','$id','$sl','$price')";
        $this->conn->query($sql);
    }
    public function getAllCart($username)
    {   $carts = [];
        $sql = " select p.image,c.product_id,p.name,c.list_price,SUM(c.quantity),SUM(c.total_price),c.total_price from cart c join product p on c.product_id = p.pid where username = '$username' and hidden = 1 GROUP BY product_id, username";
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
        }
        return $totalcart;
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
    public function payTheBill($name,$phone,$address,$username,$cod)
    {
        $sql = "update cart set hidden = 2, hidden_customer = 4,name='$name',phone='$phone',address='$address',payment='$cod' where username = '$username' and hidden = 1";
        $this->conn->query($sql);
    }
    public function getAllPay($username)
    {
        $carts = [];
        $sql = "select p.image,c.product_id,p.name,c.list_price,SUM(c.quantity),SUM(c.total_price),c.hidden ,c.hidden_customer from cart c join product p on c.product_id = p.pid where username = '$username'  and hidden = 2 and hidden_customer = 4 GROUP BY product_id, username";
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
    public function totalPayAdm($dateyear,$datemonth,$dateday){

        $sql="UPDATE cart SET total_adm = (SELECT SUM(total_price) FROM cart where  hidden = 2 and trading_day='$dateyear-$datemonth-$dateday') ";
        $this->conn->query($sql);

    }
    public function oder($dateyear,$datemonth,$dateday)
    {
        $carts = [];
        $sql = "select c.username,c.product_id,c.total_adm,p.name,c.list_price,SUM(c.quantity),SUM(c.total_price),c.status,c.payment from cart c join product p on c.product_id = p.pid where  hidden = 2 
            and trading_day='$dateyear-$datemonth-$dateday' GROUP BY product_id, username ORDER BY username ASC;" ;
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $carts[]=$row;
            }
        }
        return $carts;
    }
    public function statusDone( $id ,$username,$done,$year,$month,$day){
        $sql = "update cart set status = '$done' where product_id = '$id' and username = '$username' and trading_day='$year-$month-$day' ";
        $this->conn->query($sql);
    }
    public function statusDelivering( $id ,$username,$delivering,$year,$month,$day){
        $sql = "update cart set status = '$delivering' where product_id = '$id' and username = '$username' and trading_day='$year-$month-$day' ";
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
        $sql = "select * from account_customer where name='$name'";
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
    public function payTheBillShip()
    {
        $sql = "update cart set hidden = 2, hidden_customer = 4 where username = '$username' and hidden = 1";
        $this->conn->query($sql);
    }
}
<?php
class member
{
    private $mysql_address = "localhost";
    private $mysql_username = "shawnyan";
    private $mysql_password = "3027azsx";
    private $mysql_database = "a";
    public $link;
    private $error_message = "";
    public $passwd;
    public function __construct()
    {
        $this->link = ($GLOBALS["___mysqli_ston"] = mysqli_connect($this->mysql_address, $this->mysql_username, $this->mysql_password));

        if (mysqli_connect_errno()) {
            $this->error_message = "Failed to connect to MySQL: " . mysqli_connect_error();
            echo $this->error_message;
            return false;
        }
        mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES utf8");
        mysqli_query($this->link, "SET NAMES utf8");
        mysqli_query($this->link, "SET CHARACTER_SET_database= utf8");
        mysqli_query($this->link, "SET CHARACTER_SET_CLIENT= utf8");
        mysqli_query($this->link, "SET CHARACTER_SET_RESULTS= utf8");

        if (!(bool) mysqli_query($this->link, "USE " . $this->mysql_database)) $this->error_message = 'Database ' . $this->mysql_database . ' does not exist!';
    }

    public function GetSQLValueString($theValue, $theType)
    {
        switch ($theType) {
            case "string":
                $theValue = ($theValue != "") ? filter_var($theValue, FILTER_SANITIZE_MAGIC_QUOTES) : "";
                break;
            case "int":
                $theValue = ($theValue != "") ? filter_var($theValue, FILTER_SANITIZE_NUMBER_INT) : "";
                break;
            case "email":
                $theValue = ($theValue != "") ? filter_var($theValue, FILTER_VALIDATE_EMAIL) : "";
                break;
        }
        return $theValue;
    }

    public function select($fields, $id)
    {
        $sql_select = "SELECT $fields FROM member WHERE username=?";
        $stmt = $this->link->prepare($sql_select);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $stmt->bind_result($data['id'],$data['username'], $data['passwd'], $data['level']);
        $stmt->fetch();
        $stmt->close();
        return $data;
    }



    public function loginupdate($fields, $bind)
    {
        $query_RecLoginUpdate = "UPDATE member SET $fields WHERE username=? ";
        $stmt = $this->link->prepare($query_RecLoginUpdate);
        $stmt->bind_param("s", $bind);
        $stmt->execute();
        $stmt->close();
    }

    public function m_select($condition)
    {
        $query_RecMember = "SELECT * FROM member WHERE $condition";
        $RecMember = $this->link->query($query_RecMember);
        while ($value = mysqli_fetch_array($RecMember)) {
            $arr[] = $value;
        }
        $this->link->close();
        return $arr;
    }

    public function mem_update($data)
    {

        $realname = $data['realname'];
        $birthday = $data['birthday'];
        $email = $data['email'];
        $id = $data['id'];
        $passwd = $data['passwd'];
        $passwdo = $data['passwdo'];
        $passwdrecheck = $data['passwdrecheck'];
        $realname = $this->GetSQLValueString($realname, 'string');
        $birthday = $this->GetSQLValueString($birthday, 'string');
        $email = $this->GetSQLValueString($email, 'string');
        $id = $this->GetSQLValueString($id, 'int');
        $query_update = "UPDATE member SET passwd=?, realname=?,  birthday=?, email=? WHERE id=?";
        $stmt = $this->link->prepare($query_update);
        //檢查是否有修改密碼
        $mpass = $passwdo;
        if (($passwd != "") && ($passwd == $passwdrecheck)) {
            $mpass = password_hash($passwd, PASSWORD_DEFAULT);
        }
        $stmt->bind_param(
            "ssssi",
            $mpass,
            $realname,
            $birthday,
            $email,
            $id,
        );
        $stmt->execute();
        $stmt->close();
        if (($passwd != "") && ($passwd == $passwdrecheck)) {
            unset($_SESSION["loginMember"]);
            unset($_SESSION["memberLevel"]);
            $redirectUrl = "indexlogin.php";
        }
        //重新導向
        header("Location: $redirectUrl");
    }
    public function m_delete($id)
    {
        $sql_query = "DELETE FROM member WHERE id=?";
        $stmt = $this->link->prepare($sql_query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
    public function mem_check($data)
    {
        $username = $data['username'];
        $query_RecFindUser = "SELECT username FROM member WHERE username='{$username}'";
        $RecFindUser = $this->link->query($query_RecFindUser);
        if ($RecFindUser->num_rows > 0) {
            return false;
        } else {
            return true;
        }
    }
    public function mem_join($data)
    {

        $realname = $data['realname'];
        $username = $data['username'];
        $birthday = $data['birthday'];
        $email = $data['email'];
        $passwd = $data['passwd'];
        $realname = $this->GetSQLValueString($realname, 'string');
        $username = $this->GetSQLValueString($username, 'string');
        $passwd =  password_hash($passwd, PASSWORD_DEFAULT);
        $birthday = $this->GetSQLValueString($birthday, 'string');
        $email = $this->GetSQLValueString($email, 'string');
        //執行新增的動作	
        $query_insert = "INSERT INTO member (realname, username, passwd, birthday, email, jointime) VALUES (?, ?, ?, ?, ?, NOW())";
        $stmt = $this->link->prepare($query_insert);
        $stmt->bind_param(
            "sssss",
            $realname,
            $username,
            $passwd,
            $birthday,
            $email,
        );
        $stmt->execute();
        if (mysqli_affected_rows($this->link) > 0) {
            return true;
        } else {

            return false;
        }
    }

    public function mem_show($limit)
    {
        $total_limit = "SELECT * FROM member WHERE level<>'0' ORDER BY jointime DESC LIMIT $limit";
        $limit_record = $this->link->query($total_limit);

        while ($value = mysqli_fetch_array($limit_record)) {
            $arr[] = $value;
        }
        if (isset($arr)) {
            return $arr;
        } else {
            $errmsg = "尚無會員";
            echo $errmsg;
        }
    }
    public function mem_page($page_start)
    {
        $total = "SELECT * FROM member WHERE level<>'0' ORDER BY jointime DESC";
        $total_record = $this->link->query($total);
        $totals = $total_record->num_rows;
        $total_pages = ceil($totals / $page_start);
        $this->link->close();

        $arr[0]  = $totals;
        $arr[1]  = $total_pages;
        return $arr;
    }
    public function form_check($data)
    {
        $username = $data['username'];
        $passwd = $data['passwd'];
        $birthday = $data['birthday'];
        $email = $data['email'];
        $realname = $data['realname'];
        $passwdcheck = $data['passwdrecheck'];
        if (empty($username)) {
            $nameErr = "帳號是必填的";
            return $nameErr;
        } elseif (empty($passwd)) {
            $passErr = "密碼是必須的";
            return $passErr;
        } elseif ($passwd != $passwdcheck) {
            $passErrcheck = "確認密碼不同";
            return $passErrcheck;
        } elseif (empty($realname)) {
            $realerr = "姓名請填寫";
            return $realerr;
        } elseif (empty($birthday)) {
            $birerr = "生日請填寫";
            return $birerr;
        } elseif (empty($email)) {
            $emailerr = "信箱請填寫";
            return $emailerr;
        } else {
            $checkform = "";
            return $checkform;
        }
    }
    public function update_check($data)
    {
        $passwd = $data['passwd'];
        $birthday = $data['birthday'];
        $email = $data['email'];
        $realname = $data['realname'];
        $passwdcheck = $data['passwdrecheck'];
        if ($passwd != $passwdcheck) {
            $passErrcheck = "確認密碼不同";
            return $passErrcheck;
        } elseif (empty($realname)) {
            $realerr = "姓名請填寫";
            return $realerr;
        } elseif (empty($birthday)) {
            $birerr = "生日請填寫";
            return $birerr;
        } elseif (empty($email)) {
            $emailerr = "信箱請填寫";
            return $emailerr;
        } else {
            $checkform = "";
            return $checkform;
        }
    }
}

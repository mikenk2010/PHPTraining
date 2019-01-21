<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $Result = $this->User_model->getListUser();
        $Data['Result'] = $Result;
        $this->load->view('welcome_message', $Data);
    }

    public function Action()
    {
        $First = $_GET['first'];
        $Last = $_GET['last'];
        $arr['First'] = $First;
        $arr['Last'] = $Last;
        $this->load->view('v_action', $arr);
    }

    public function insertUser()
    {
        if (! empty($_POST)) {
            $arr = $_POST;
            $First = $arr['first'];
            $Last = $arr['last'];
            $Result = $this->User_model->getListUser();
            foreach ($Result as $key => $value) {
                if ($value['FirstName'] == $First && $value['LastName'] == $Last) {
                    echo '<script type="text/javascript">';
                    echo 'alert("Trùng tên, xin nhập lại");';
                    echo 'location="insertUser"';
                    echo '</script>';
                    return;
                }
            }
            $Avatar = $_FILES['avatar'];
            $Tmp__name = $Avatar['tmp_name'];
            $Name = $Avatar['name'];
            move_uploaded_file($Tmp__name, "upload/$Name");
            $Gender = $arr['gender'];
            if ($Gender == 'male')
                $Gender = FALSE;
            else
                $Gender = TRUE;

            $Status = $arr['status'];
            if ($Status == 'inactive')
                $Status = FALSE;
            else
                $Status = TRUE;

            $Address = $arr['Address'];
            $Day = $arr['day'];
            $Month = $arr['month'];
            $Year = $arr['year'];
            $Str = "$Year-$Month-$Day";
            $Date = date_create_from_format('Y-m-d', $Str);
            $CreateDate = date('Y-m-d H:i:s');
            $User = [
                'FirstName' => $First,
                'LastName' => $Last,
                'Gender' => $Gender,
                'Address' => $Address,
                'DoB' => $Date->format('Y-m-d'),
                'Avatar' => "upload/$Name",
                'Status' => $Status,
                'CreateDate' => $CreateDate
            ];
            $Flag = $this->User_model->insertUser($User);

            if ($Flag == TRUE) {
                echo '<script type="text/javascript">';
                echo 'alert("Thêm thành công");';
                echo 'location="insertUser"';
                echo '</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'alert(Thêm không thành công,vui lòng thử lại");';
                echo 'location="insertUser"';
                echo '</script>';
            }
        }
        $this->load->view('v_them');
    }

    public function deleteUser()
    {
        $First = $_GET['first'];
        $Last = $_GET['last'];
        echo $First;
        $Flag = $this->User_model->deleteUser($First, $Last);
        if ($Flag == TRUE) {
            echo '<script type="text/javascript">';
            echo 'alert("xóa thành công");';
            echo 'location="../../"';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert(Xóa không thành công,vui lòng thử lại");';
            echo 'location="Action"';
            echo '</script>';
        }
    }

    public function updateUser()
    {
        $First = $_GET['first'];
        $Last = $_GET['last'];
        $Avatar = $_FILES['avatar'];
        $Tmp__name = $Avatar['tmp_name'];
        $Name = $Avatar['name'];
        move_uploaded_file($Tmp__name, "upload/$Name");

        $Address = $_POST['Address'];
        $Gender = $_POST['gender'];
        if ($Gender == 'male')
            $Gender = false;
        else
            $Gender = true;

        $Status = $_POST['status'];
        if ($Status == 'inactive')
            $Status = false;
        else
            $Status = true;
        $Day = $_POST['day'];
        $Month = $_POST['month'];
        $Year = $_POST['year'];
        $Date = new DateTime();
        $Str = "$Year-$Month-$Day";
        $Date = date_create_from_format('Y-m-d', $Str);
        $User = [
            'Gender' => $Gender,
            'Address' => $Address,
            'Avatar' => "upload/$Name",
            'DoB' => $Date->format('Y-m-d'),
            'Status' => $Status
        ];
        $Flag = $this->User_model->updateUser($First, $Last, $User);
        if ($Flag == TRUE) {
            echo '<script type="text/javascript">';
            echo 'alert("Cập nhật thành công");';
            echo 'location="../../"';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert(Cập nhật không thành công,vui lòng thử lại");';
            echo 'location="Action"';
            echo '</script>';
        }
    }
}
?>
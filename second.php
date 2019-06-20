<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nayana
 * Date: 6/17/2019
 * Time: 8:55 PM
 */
?>
<?php

$cid=$_POST['customerid'];
$name=$_POST['customername'];
$address=$_POST['address'];
$tel=$_POST['telephone'];
$salary=$_POST['salary'];

class customer
{
    private $cid;
    private $name;
    private $address;
    private $tel;
    private $salary;

    /**
     * customer constructor.
     * @param $cid
     * @param $name
     * @param $address
     * @param $tel
     * @param $salary
     */
    public function __construct($cid, $name, $address, $tel, $salary)
    {
        $this->cid = $cid;
        $this->name = $name;
        $this->address = $address;
        $this->tel = $tel;
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }


}
$customer=new customer($cid,$name,$address,$tel,$salary);
customer_id:echo $customer->getCid();echo"<br>";
customer_name:echo $customer->getName();echo"<br>";
address:echo $customer->getAddress();echo"<br>";
Telephone:echo $customer->getTel();echo"<br>";
salary:echo $customer->getSalary();echo"<br>";
?>


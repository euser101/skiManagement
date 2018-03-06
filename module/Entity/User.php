<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=35, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=35, nullable=false)
     */
    private $surname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=320, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=20, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=256, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd_reset_token", type="string", length=32, nullable=true)
     */
    private $pwdResetToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pwd_reset_token_creation_date", type="datetime", nullable=true)
     */
    private $pwdResetTokenCreationDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getBirthdate(): \DateTime {
        return $this->birthdate;
    }

    function getEmail() {
        return $this->email;
    }

    function getMobile() {
        return $this->mobile;
    }

    function getPhone() {
        return $this->phone;
    }

    function getPassword() {
        return $this->password;
    }

    function getCreated(): \DateTime {
        return $this->created;
    }

    function getPwdResetToken() {
        return $this->pwdResetToken;
    }

    function getPwdResetTokenCreationDate(): \DateTime {
        return $this->pwdResetTokenCreationDate;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setBirthdate(\DateTime $birthdate) {
        $this->birthdate = $birthdate;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setCreated(\DateTime $created) {
        $this->created = $created;
    }

    function setPwdResetToken($pwdResetToken) {
        $this->pwdResetToken = $pwdResetToken;
    }

    function setPwdResetTokenCreationDate(\DateTime $pwdResetTokenCreationDate) {
        $this->pwdResetTokenCreationDate = $pwdResetTokenCreationDate;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}


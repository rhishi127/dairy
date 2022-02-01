<?php

namespace Domain\Entity\Employee;

use Custom\Domain\Entity\DefaultEntity;

class EmployeeEntity extends DefaultEntity
{
    /**
     * @var string
     */
    protected $first_name;

    /**
     * @var string
     */
    protected $last_name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $mobile_number;

    /**
     * @var int
     */
    protected $branch_id;

    /**
     * @var bool|null
     */
    protected $is_active;
    
    /**
     * @var string|null
     */
    protected $user_token;
    
    /**
     * @var int|null
     */
    protected $user_type_id;
    
    /**
     * @var int|null
     */
    protected $created_by;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->first_name = $firstName;

    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->last_name = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getMobileNumber(): string
    {
        return $this->mobile_number;
    }

    /**
     * @param string $mobileNumber
     */
    public function setMobileNumber(string $mobileNumber): void
    {
        $this->mobile_number = $mobileNumber;
    }

    /**
     * @return int
     */
    public function getBranchId(): int
    {
        return $this->branch_id;
    }

    /**
     * @param int $branchId
     */
    public function setBranchId(int $branchId): void
    {
        $this->branch_id = $branchId;
    }

    /**
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->is_active;
    }

    /**
     * @param bool|null $isActive
     */
    public function setIsActive(bool $isActive = null): void
    {
        $this->is_active = $isActive;
    }
    
    public function getUserToken(): ?string {
        return $this->user_token;
    }

    public function getUserTypeId(): ?int {
        return $this->user_type_id;
    }

    public function getCreatedBy(): ?int {
        return $this->created_by;
    }

    public function setUserToken(?string $user_token): void {
        $this->user_token = $user_token;
    }

    public function setUserTypeId(?int $user_type_id): void {
        $this->user_type_id = $user_type_id;
    }

    public function setCreatedBy(?int $created_by): void {
        $this->created_by = $created_by;
    }
}

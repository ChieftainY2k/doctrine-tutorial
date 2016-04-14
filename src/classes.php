<?php

/** @Entity */
class Customer
{
    // ...

    /**
     * @Id @GeneratedValue @Column(type="integer")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Address")
     * @JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;
}

/** @Entity */
class Address
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     */
    private $id;
}



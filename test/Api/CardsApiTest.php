<?php
/**
 * CardsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PAYCOMET REST API
 *
 * PAYCOMET API REST for customers.
 *
 * OpenAPI spec version: 2.99.0
 * Contact: tecnico@paycomet.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.52
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use Swagger\Client\Configuration;
use Swagger\Client\ApiException;
use Swagger\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * CardsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CardsApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for addUser
     *
     * Tokenizes a card. Either card number and CVC2 or jetToken are required. For you to send directly the card data you should be PCI certified or the accepting the requirement to submit quarterly SAQ-AEP and get ASV scans. For most users is strongly recommended getting the jetToken with JETIFRAME or using GET integration to register the cards instead of REST..
     *
     */
    public function testAddUser()
    {
    }

    /**
     * Test case for editUser
     *
     * Changes the expiry date, cvc2 or both.
     *
     */
    public function testEditUser()
    {
    }

    /**
     * Test case for infoUser
     *
     * Get card info.
     *
     */
    public function testInfoUser()
    {
    }

    /**
     * Test case for physicalAddCard
     *
     * Tokenize a card by physical encrypted data.
     *
     */
    public function testPhysicalAddCard()
    {
    }

    /**
     * Test case for physicalEditCard
     *
     * Edit a card entered by physical encrypted data.
     *
     */
    public function testPhysicalEditCard()
    {
    }

    /**
     * Test case for removeUser
     *
     * Removes a card.
     *
     */
    public function testRemoveUser()
    {
    }
}
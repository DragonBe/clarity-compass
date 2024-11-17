<?php

declare(strict_types=1);

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given a customer has given their :arg1
     */
    public function aCustomerHasGivenTheir($arg1): void
    {
        throw new PendingException();
    }

    /**
     * @When I check their :arg1
     */
    public function iCheckTheir($arg1): void
    {
        throw new PendingException();
    }

    /**
     * @Then the check should return :arg1
     */
    public function theCheckShouldReturn($arg1): void
    {
        throw new PendingException();
    }
}

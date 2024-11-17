Feature: VAT ID Validation
  In order to comply with VAT regulations
  As a business owner
  I need to validate VAT IDs of my customers, partners, and suppliers

  Scenario: Validate a valid VAT ID
    Given a customer has given their "VAT ID"
    When I check their "VAT ID"
    Then the check should return "valid"

  Scenario: Validate an invalid VAT ID
    Given a customer has given their "VAT ID"
    When I check their "VAT ID"
    Then the check should return "invalid"
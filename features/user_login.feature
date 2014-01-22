Feature: A user can log on to an account
   As a user
   I want to log on to my account
   So I can securely work on my CVs, to prevent other people from working on them

   Scenario: Log on with correct credentials
      Given I am on "/index.php"
      When I follow "log on"
      And I fill in "username" with "bob"
      And I fill in "password" with "ravensfoot"
      And I press "log on"
      Then I should see "Hello, bob"

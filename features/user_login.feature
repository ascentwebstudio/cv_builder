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
      Then I should see "Hello, Bob"

   Scenario: A different user logs on with correct credentials
      Given I am on "/index.php"
      When I follow "log on"
      And I fill in "username" with "charles"
      And I fill in "password" with "raiderlostark88"
      And I press "log on"
      Then I should see "Hello, Charles"

   Scenario: An unregistered user attempts to log on
      Given I am on "/index.php"
      When I follow "log on"
      And I fill in "username" with "monk435"
      And I fill in "password" with "sneakyChap"
      And I press "log on"
      Then I should see "Sorry, username or password are wrong"
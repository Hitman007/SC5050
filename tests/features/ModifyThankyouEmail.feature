Feature: Modify email sent by the site when a particular product is purchased
    Given the site has a Woocommerce product where the productID is '123'
    When the user purchases a product with productID '123'
     And the system normally sends an email, 'thank you for your order'
    Then I should be able to change the title of the email to 'this is a title'
     And I should be able to change the email's body to 'this is a body'

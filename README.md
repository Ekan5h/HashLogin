# HashLogin
A novel system of authentication using just a 6 digit (for maximum 343000 users) alpha-numeric string.
The three nodes involved in the login process are:
- An offline/online node that generates the login key without requesting the server.
- An online node that sends the login request to the server.
- The server which verifies the key and determine its user

## Key Generator
The key generator is the java class *client.java* which spits out the encrypted key evertime it is run. It works as follows:  
Every user is given a random seed during registration. The output string can be a combination of 70 characters that are defined in the the array.
Converting the *userID* to base 70 and using those 70 characters as the digits gives us 3 characters of the string. The other 3 characters are the sum of time and the seed value in base 70.
These 6 characters are then shifted by some characters based on the time and jumbled in a specific permutation. This becomes the key.
It can be seen that the string changes randomly each minute and has no correlation with the previous string.

## Validation
Validation is done by a php script which reads the key as a GET parameter by the client. Then based on the time, the *userID* is calculated and user's seed value is looked up in the database. Using this seed value, the rest three digits are validated. If the validation checks out, the *userID* is returned otherwose, INVALID is returned.
This script checks for both currrent string and previous string as there can be mismatches in the seconds or milliseconds of the client and the server.

## Applications
The 6-digit code is not that secure to be used in high security services such as banking nor does it support that many users. This can be taken care of by adding more digits in the string which becomes more difficult to enter.
Despite this, the system can be helpful as the key generator can be in the form of embedded systems as keychains or IoT devices.

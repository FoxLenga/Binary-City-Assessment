$(document).ready(function() {
    // Attach an event listener to the source field
    $('#client_name').on('input', function() {
        // Get the value of the source field
        var sourceValue = $(this).val();

          var firstThreeCharacters = sourceValue.substring(0, 3).toUpperCase();
        
         var combinedRandoms = firstThreeCharacters + rant;
    //     // Display the first 3 characters in the destination field
         $('#client_code').val(combinedRandoms);//.push(rant);

    //     if(sourceValue > 3){
    //         var firstThreeCharacters = sourceValue.substring(0, 3).toUpperCase();
        
         var combinedRandoms = firstThreeCharacters + rant;
    //     // Display the first 3 characters in the destination field
         $('#client_code').val(combinedRandoms);//.push(rant);

    //     }else if(sourceValue.length == 2){
    //         var firstThreeCharacters = sourceValue.substring(0, 2).toUpperCase();
    //         var character = generateRandomString(2);
    //         var combinedRandoms = firstThreeCharacters + character + rant;
    //     // Display the first 3 characters in the destination field
    //     $('#client_code').val(combinedRandoms);

    //     } else if(sourceValue.length == 1){
    //         var firstThreeCharacters = sourceValue.substring(0, 1).toUpperCase();
    //         var character = generateRandomString(1);
    //         var combinedRandoms = firstThreeCharacters + character + rant;
    //     // Display the first 3 characters in the destination field
    //     $('#client_code').val(combinedRandoms);

    //     }else{
    //    // var firstThreeCharacters = sourceValue.substring(0, 3).toUpperCase();
    //     var character = generateRandomString(4).toUpperCase();
    //     var combinedRandoms = character + rant;
    //     // Display the first 3 characters in the destination field
    //     $('#client_code').val(combinedRandoms);
    //     }
       


    });
});

function generateRandomString() {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    for (let i = 0; i < 2; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        result += characters.charAt(randomIndex);
    }

    return result;
}

// Example usage
const randomString = generateRandomString();
console.log(randomString);


function getRandomInt(max) {
    return Math.floor(Math.random() * max);
  }
  
  console.log(getRandomInt(10));
  
  rant = (getRandomInt(10).toString()+ getRandomInt(10) + getRandomInt(10)).toString();

  

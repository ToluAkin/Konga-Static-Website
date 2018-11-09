var name = "Toluwalase Akintoye";
        alert("My name is "+ name);
        
var person = { 
    name: ['Toluwalase', 'Akintoye'], 
    age: 22, 
    gender: 'female', 
    interests: ['food', 'staring at the screen'], 
    bio: function() { 
        alert(this.name[0] + ' ' + this.name[1] + ' is ' + this.age + ' years old. She likes ' + this.interests[0] + ' and ' + this.interests[1] + 
        '.'); 
 },  
     greeting: function() {    
                alert('Hi! I\'m ' + this.name[0] + '.');  
    } 
};
$('#add').click(function (){
        var value = $('#textfield').val();
        $('ul').append('<li>' + value + '</li>');
        console.log(value);
});

// Gets all inputs from form
const title = document.getElementById('title')
const name = document.getElementById('name')
const email = document.getElementById('email')
const query = document.getElementById('query')

// gets all divs that will store error messages 
const nameerror = document.getElementById('nameerror')
const titleerror = document.getElementById('titleerror')
const emailerror = document.getElementById('emailerror')
const queryerror = document.getElementById('queryerror')

// The format email most follow 
var emailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


contactform.addEventListener('submit', (e) => {
    // looks to see if user entered a name 
    if (name.value == '' || name.value == null) {
        e.preventDefault()
        nameerror.innerText = ('An name is required')
    }else{
        nameerror.innerText = (null)
    }
    // looks to see if user entered a email 
    if (email.value == '' || email.value == null) {
        e.preventDefault()
        emailerror.innerText = ("An email is required")
    }else if (!email.value.match(emailformat)){
        e.preventDefault()
        emailerror.innerText = ("An valid email is required")
    }else{
        emailerror.innerText = (null)
    }
    // looks to see if user entered a query
    if (query.value == '' ||query.value == null ) {
        e.preventDefault()
        queryerror.innerText = ("An query is required")
    }else if(query.value.length < 20){
        e.preventDefault()
        queryerror.innerText = ("A query of over a length of 20 charters is required ")
    }else{
        queryerror.innerText = (null)
    }
    // looks to see if user selected a value 
    if (title.value == '...'){
        e.preventDefault()
        titleerror.innerText = ("A title is required")
    }else{
        titleerror.innerText = (null)
    }
})


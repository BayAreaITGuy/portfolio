/*thank you Chris Hawkes https://www.youtube.com/watch?v=HnXmI2UVZlU&ab_channel=ChrisHawkes */
/*element 1 */
let my_element = document.createElement('h1');
let my_span = document.createElement('span');

my_span.innerText = "Thank you Chris Hawkes!";

my_element.appendChild(my_span);

my_element.classList.add('custom_class');

document.body.appendChild(my_element);

/*element 2 */
let my_element2 = document.createElement('h2');
let my_span2 = document.createElement('span');

my_span2.innerText = "I made this text with pure JavaScript :)";

my_element2.appendChild(my_span2);

my_element2.classList.add('custom_class');

document.body.appendChild(my_element2);

/*element 3 */
let my_element3 = document.createElement('div');
let my_p = document.createElement('p');

my_p.innerText = "<p> within a <div> using the 3rd and 5th custom class!";

my_element3.appendChild(my_p);

my_element3.classList.add('custom_class5','custom_class3');

document.body.appendChild(my_element3);

/*element 4 */
let my_element4 = document.createElement('div');
let my_p2 = document.createElement('p');

my_p2.innerText = "This sentence uses the third custom class";

my_element4.appendChild(my_p2);

my_element4.classList.add('custom_class3');

document.body.appendChild(my_element4);

/*Element 5 */

let img = new Image();
img.src = "https://media.customon.com/unsafe/600x600/img.customon.com//art/2/600/600/b8b5b5/16053/ac6adee35b0f1bee64d2fee4a29209f8.png.jpg";

img.classList.add('custom_class4');

document.body.appendChild(img);

/*hello world H1*/
let my_h1 = document.createElement('h1');

my_h1.innerText = 'Hello world!';

my_h1.classList.add('custom_class3');

document.body.appendChild(my_h1);

/*textarea*/
let my_textarea = document.createElement('textarea');

my_textarea.innerText = "textarea textarea textarea";

my_textarea.classList.add("text_class");

document.body.appendChild(my_textarea);

let my_ul = document.createElement('ul');


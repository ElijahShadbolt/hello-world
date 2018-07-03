
function printThing()
{
    console.log('where');
}

function doStuff()
{
    let newDiv = document.createElement('div');

    let text = document.createTextNode('howdy pardner');
    newDiv.appendChild(text);

    let button = document.createElement('button');
    button.setAttribute('onclick', 'printThing()');
    button.innerText = 'Click me!';
    newDiv.appendChild(button);
    
    let root = document.getElementById('root');
    root.appendChild(newDiv);
}

doStuff();

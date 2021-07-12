

a = 0;
function addDish(){
        a++;

        var div = document.createElement('div');
        div.setAttribute('class', 'form-inline');
            div.innerHTML = `<div class="flex justify-evenly my-6">
            <label for="dish">Platillo</label>
            <input type="number" class="border-2 rounded-lg px-4 border-black" id="dish" name="dish'+a+'" type="text"/>
            </div>
            `
;
            document.getElementById('dish').appendChild(div);
}
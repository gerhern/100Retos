var i = 1;

function addDish(){
        var div = document.createElement('div');
        div.setAttribute('class', 'flex justify-evenly my-6');
            div.innerHTML = `
            <label>Platillo</label>
            <input type="number" class="border-b-2 px-2 mx-4 border-ebony bg-ash-gray" type="text" name="dish`+ this.i + `"/>
            `;
            document.getElementById('list').append(div);
            this.i++
}
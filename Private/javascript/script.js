$(document).ready(() => {

    class Clear {

        constructor() {
            $("#button-clear").on("click", (event)=> {
                event.preventDefault()
                this.clearFunction()
            })
        }

        clearFunction() {
            $('input[type="text"]').val('');
            $('select').each(function() {
                this.selectedIndex = 0;
            });
        }

    }

    const clear = new Clear()

})

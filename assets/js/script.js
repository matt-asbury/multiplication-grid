(function(){

    "use strict";
    
    var Edu = {
    
        xMin: 0,
        xMax: 12,
        yMin: 0,
        yMax: 12,
        
        init: function(){
            this.addBindings();
        },
        
        addBindings: function(){
            $("table input").bind("keyup blur", function(){
                var head = Edu.getCellColumnValue($(this));
                console.log(head);
                var row = Edu.getCellRowValue($(this));
                console.log(row);
                var sum = head * row;
                if($(this).val() === ''){
                    $(this).removeClass();
                } else if($(this).val() != sum){
                    $(this).removeClass("correct").addClass("incorrect");
                } else {
                    $(this).removeClass("incorrect").addClass("correct");
                }
            });
            
            $(".button").bind("click", function(){
                $("table input").val(null).removeClass();
                return false;
            });
            
            $("table input").bind("keydown", function(event){
                switch(event.keyCode){
                    case 37 :
                        Edu.moveCell($(this), "left");
                        break;
                    case 38:
                        Edu.moveCell($(this), "up");
                        break;
                    case 39:
                        Edu.moveCell($(this), "right");
                        break;
                    case 40:
                        Edu.moveCell($(this), "down");
                        break;
                }
            });
        },
        
        getCellColumnValue: function(obj){
            return obj.attr("col");            
        },
        
        getCellRowValue: function(obj){
            return obj.attr("row");  
        },
        
        moveCell: function(obj, direction){
            var xPos = this.getCellRowValue(obj);
            var yPos = this.getCellColumnValue(obj);
            if(
                xPos === this.xMin && direction === "up" ||
                xPos === this.xMax && direction === "down" ||
                yPos === this.yMin && direction === "left" ||
                yPos === this.yMax && direction === "right"
            ){
                return false;
            } else {
                var newCell;
                switch(direction){
                    case "up":
                        newCell = "#" + yPos + "-" + (parseFloat(xPos)-1);
                        break;
                    case "down":
                        newCell = "#" + yPos + "-" + (parseFloat(xPos)+1);
                        break;
                    case "left":
                        newCell = "#" + (parseFloat(yPos)-1) + "-" + xPos;
                        break;
                    case "right":
                        newCell = "#" + (parseFloat(yPos)+1) + "-" + xPos;
                        break;
                }
                $(newCell).focus();
            }
        }

    };
    
    $(document).ready(function(){
        Edu.init();
    });

})();
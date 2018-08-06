$(function(){
    $("#slider").slider({
        range: "min",
        min: 1,
        max: 101,
        value: 0,
        slide: function(event, ui){
            var val=$("#slider").slider("value");
            $(".value-time").text(val+"ч");
            cost=0;
            rate_name=localStorage.getItem("elem_name");
            switch(rate_name){
                case "landing": rate=400; tech_task_cost=1000; design_cost=3000;
                break;
                case "site": rate=500; tech_task_cost=2000; design_cost=4500;
                break;
                case "store": rate=800; tech_task_cost=3000; design_cost=8000;
                break;
                case "integration": rate=300; tech_task_cost=1000;
                break;
            }
            
            cost+=val*rate;
            if($(".checkbox-tech_task").prop("checked")){
                cost+=tech_task_cost;
            }
            else{
                tech_task_cost=0;
            }
            if($(".checkbox-design").prop("checked")){
                cost+=design_cost;
            }
            else{
                design_cost=0;
            }
            
            $(".cost").text(cost +"р");
            localStorage.setItem("cost", cost);
            localStorage.setItem("hours", val);
            localStorage.setItem("tech_task", tech_task_cost);
            localStorage.setItem("design", design_cost);
            
        }
    });
});
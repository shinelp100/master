/**
 * Created by lw on 2017/6/30.
 */
//target1,target2都是jq对象
function AvoidDuplicateSubmission(target1,target2,callback){
    if(target1 instanceof jQuery && target2 instanceof jQuery){
        target1.on('click',avoidMoreSubmit);
        function avoidMoreSubmit(e){
            e.stopPropagation();
            if(!!$(this).data('click')){
                $(this).data({'click':false});
                callback();
            }
        }
        target2.on('click',function(){
            target1.data({'click':true});
        })
    } else {
        console.log("target is not correct obj");return
    }
}
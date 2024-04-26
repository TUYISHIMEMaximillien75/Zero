const search = () => {
    const searchbox = document.getElementById("search-task").value.toUpperCase();
    const storeitems = document.getElementById("task-container")
    const task = document.querySelectorAll(".task")
    const tname = document.getElementsByTagName("h3")
    // const tname2 = document.getElementsByTagName("h5")
    // task.forEach(task=>{
    //     task.style.display="none";
    // })
    // clearInterval(lp);

    for (var i = 0; i < tname.length; i++) {
        let match = task[i].getElementsByTagName('h3')[0];

        if (match) {
            let textvalue = match.textContent || match.innerHTML

            if (textvalue.toUpperCase().indexOf(searchbox) > -1) {
                task[i].style.display = "flex";
            } else {
                task[i].style.display = "none";
            }
        }
    }
}
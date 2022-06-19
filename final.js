var template = "vibescv.php";


const para = document.getElementById("para");

const reloadiframe = document.getElementById("myBtn");
const ifr = document.getElementById("ifr");

reloadiframe.addEventListener("click", function() {
    document.getElementById("ifr").src = template;
});

const changeTemplate = document.getElementById("changetemplate");
const showtemplate = document.getElementById("templateshow");

const close = document.getElementsByClassName("close");

const iconchange = document.getElementById("showicon").classList;

//Fromatting
const formatChange = document.getElementById("format");
const formatdiv = document.getElementById("formatting");
const formatIcon = document.getElementById("formaticon").classList;



changeTemplate.addEventListener("click", function() {
    if (showtemplate.style.display == "none") {
        showtemplate.style.display = "block";

        formatdiv.style.display = "none";
        templatecolor.style.display = "none";

        formatIcon.remove("bi-chevron-down");
        formatIcon.add("bi-chevron-up");
        colorId.remove("bi-chevron-down");
        colorId.add("bi-chevron-up");


        iconchange.remove("bi-chevron-up");
        iconchange.add("bi-chevron-down");
    } else {
        showtemplate.style.display = "none";
        iconchange.remove("bi-chevron-down");
        iconchange.add("bi-chevron-up");

    }

});


close[0].addEventListener("click", function() {
    showtemplate.style.display = "none";
    iconchange.remove("bi-chevron-down");
    iconchange.add("bi-chevron-up");
});

//format

formatChange.addEventListener("click", function(event) {
    if (formatdiv.style.display == "none") {
        formatdiv.style.display = "block";

        showtemplate.style.display = "none";
        templatecolor.style.display = "none";

        colorId.remove("bi-chevron-down");
        colorId.add("bi-chevron-up");

        iconchange.remove("bi-chevron-down");
        iconchange.add("bi-chevron-up");

        formatIcon.remove("bi-chevron-up");
        formatIcon.add("bi-chevron-down");
    } else {
        formatdiv.style.display = "none";
        formatIcon.remove("bi-chevron-down");
        formatIcon.add("bi-chevron-up");
    }


});

// document.addEventListener('click', function(event) {
//     if (formatdiv.style.display == "block") {
//         var isClickInsideElement = formatdiv.contains(event.target);
//         // console.log(!isClickInsideElement);
//         if (!isClickInsideElement) {
//             console.log("clicked");
//             // formatdiv.style.display = "none";
//             // formatIcon.remove("bi-chevron-down");
//             // formatIcon.add("bi-chevron-up");
//         }
//     }
// });

close[1].addEventListener("click", function() {
    formatdiv.style.display = "none";
    formatIcon.remove("bi-chevron-down");
    formatIcon.add("bi-chevron-up");
});


// // var ignoreClickOnMeElement = document.getElementById('someElementID');

// formatChange.addEventListener('click', function(event) {

// });







//template color
const templatecolor = document.getElementById("colortemp");
const changeColor = document.getElementById("changeColor");
const colorId = document.getElementById("colorid").classList;



changeColor.addEventListener("click", function() {
    if (templatecolor.style.display == "none") {
        templatecolor.style.display = "block";

        formatdiv.style.display = "none";
        showtemplate.style.display = "none";

        iconchange.remove("bi-chevron-down");
        iconchange.add("bi-chevron-up");

        formatIcon.remove("bi-chevron-down");
        formatIcon.add("bi-chevron-up");


        colorId.remove("bi-chevron-up");
        colorId.add("bi-chevron-down");
    } else {
        templatecolor.style.display = "none";
        colorId.remove("bi-chevron-down");
        colorId.add("bi-chevron-up");
    }

})

close[2].addEventListener("click", function() {
    templatecolor.style.display = "none";
    colorId.remove("bi-chevron-down");
    colorId.add("bi-chevron-up");
});


//fontsize range

var fontSizeRange = document.getElementById("fontSizeid");
var displayFontsize = document.getElementById("displayfontsize");

displayFontsize.innerHTML = fontSizeRange.value;
fontSizeRange.addEventListener("change", function() {
    displayFontsize.innerHTML = fontSizeRange.value;
    //ajax to send fontsize value
    $.ajax({
        type: "post",
        url: "fontsizerange.php",
        data: { delete_id: fontSizeRange.value },
        success: function(data) {
            console.log(data);
        }
    });
});



// line spacing

var linespacingid = document.getElementById("linespacingid");
var linespacingshow = document.getElementById("linespacingshow");

linespacingshow.innerHTML = linespacingid.value;

linespacingid.addEventListener("change", function() {
    //show value
    linespacingshow.innerHTML = linespacingid.value;


    $.ajax({
        type: "post",
        url: "linespace.php",
        data: { line_spacing: linespacingid.value },
        success: function(data) {
            console.log(data);
        }
    })


});




//HEADING SPACE

var headSpaceid = document.getElementById("headspaceid");
var showHeadspace = document.getElementById("showheadspace");

showHeadspace.innerHTML = headSpaceid.value;

headSpaceid.addEventListener("change", function() {
    //show value
    showHeadspace.innerHTML = headSpaceid.value;


    $.ajax({
        type: "post",
        url: "headspace.php",
        data: { headSpace: headSpaceid.value },
        success: function(data) {
            console.log(data);
        }
    })


});


// TOP MARGIN

var topid = document.getElementById("topid");
var showTop = document.getElementById("showtop");

showTop.innerHTML = topid.value;

topid.addEventListener("change", function() {
    //show value
    showTop.innerHTML = topid.value;


    $.ajax({
        type: "post",
        url: "topchange.php",
        data: { top_val: topid.value },
        success: function(data) {
            console.log(data);
        }
    })


});


//  FONT FAMILY 

var fontFamilyid = document.getElementById("fontfamilyid");
var showFontfamily = document.getElementById("fontfamilyshow");

showFontfamily.innerHTML = fontFamilyid.value;

fontFamilyid.addEventListener("change", function() {
    //show value
    showFontfamily.innerHTML = fontFamilyid.value;


    $.ajax({
        type: "post",
        url: "fontfamily.php",
        data: { fontFamily: fontFamilyid.value },
        success: function(data) {
            console.log(data);
        }
    })


});


// SIDE MAGIN 

var sideMarginid = document.getElementById("sidemarginid");
var showSidemargin = document.getElementById("showsidemargin");

showSidemargin.innerHTML = sideMarginid.value;

sideMarginid.addEventListener("change", function() {
    //show value
    showSidemargin.innerHTML = sideMarginid.value;


    $.ajax({
        type: "post",
        url: "sidemargin.php",
        data: { sideMargin: sideMarginid.value },
        success: function(data) {
            console.log(data);
        }
    })


});



//  SECTION SPACE 

var sectionspaceid = document.getElementById("sectionspaceid");
var showSectionspace = document.getElementById("showsectionspace");

showSectionspace.innerHTML = sectionspaceid.value;

sectionspaceid.addEventListener("change", function() {
    //show value
    showSectionspace.innerHTML = sectionspaceid.value;


    $.ajax({
        type: "post",
        url: "sectionspace.php",
        data: { sectionSpace: sectionspaceid.value },
        success: function(data) {
            console.log(data);
        }
    })


});


//  PARAGRAPH INDENT

var bottomId = document.getElementById("bottomid");
var showBottomid = document.getElementById("showbottomid");

showBottomid.innerHTML = bottomId.value;

bottomId.addEventListener("change", function() {
    //show value
    showBottomid.innerHTML = bottomId.value;


    $.ajax({
        type: "post",
        url: "bottomchange.php",
        data: { bottom_val: bottomId.value },
        success: function(data) {
            console.log(data);
        }
    })


});



// TEMPALTE COLOR

var colorTemplate = document.getElementById("color_template");




colorTemplate.addEventListener("change", function() {



    $.ajax({
        type: "post",
        url: "templatecolor.php",
        data: { templateColorval: colorTemplate.value },
        success: function(data) {
            console.log(data);
        }
    })


});


function fun2() {
    let parad = document.getElementById("color_template").value;
    alert('second value is' + parad);
}
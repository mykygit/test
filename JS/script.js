var document=null;
var start = "<br>ココカラ────────<br>"
var end = "────────ココマデ<br><br>"


document.write("問1" + start);
for (var star = 1; star <= 5; star++) {
    document.write("★");
}
document.write("<br>" + end);

document.write("問2" + start);
for (var star = 1; star <= 8; star++) {
    if (star % 4 == 0){
        document.write("<br>");
    } else {
        document.write("★");
    }
}
document.write(end);

document.write("問3" + start);
for (var star = 1; star <= 12; star++) {
    if (star % 6 == 0) {
        document.write("<br>");
    } else {
    document.write("☆");
    }
}
document.write(end);

document.write("問4" + start);
for (var star = 1; star <= 24; star++) {
    if (star % 6 == 0) {
        document.write("<br>");
    } else {
    document.write("★");
    }
}
document.write(end);

document.write("問5" + start);
for (var star = 1; star <= 16; star++) {
    if (star % 4 == 0) {
        document.write("<br>");
    } else {
    document.write("★");
    }
}
document.write(end);

document.write("問6" + start);
for (var star = 1; star <= 12; star++) {
    if (star % 2 == 1) {
        document.write("★");
    } else if(star % 4 == 0) {
        document.write("<br>");
    } else {
        document.write("☆");
    }
}
document.write(end);

document.write("問7" + start);
for (var star = 1; star <= 24; star++) {
    if (star % 2 == 1) {
        document.write("★");
    } else if(star % 6 == 0) {
        document.write("<br>");
    } else {
    document.write("☆");
    }
}
document.write(end);

document.write("問8" + start);
for (var star = 0; star < 5; star++) {
    for (var a = 1; a <= (star + 1); a++) {
        document.write("★");
    }
  document.write("<br>");
}
document.write(end);


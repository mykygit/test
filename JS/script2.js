document.write("問1<br>");

function area(radius, Pi = 3.14) {
    return　"半径" + radius + "cmの円の面積は" + (radius * radius * Pi) + "㎠です。<br>";
}

document.write(area(5));
document.write(area(7));
document.write(area(10,3) + "<br>");


document.write("問2<br>");

function price(group, adult, child, ap = 500, cp = 200) {
    return adult * ap + child * cp + "円です。<br>";
}

document.write(price("A",2,4));
document.write(price("B",1,5));
document.write(price("C",3,7));
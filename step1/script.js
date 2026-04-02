function calculateGPA() {
    // جلب القيم من الخانات (Inputs)
    // نفترض أن عندك ID اسمه note1 و note2
    let n1 = parseFloat(document.getElementById('note1').value);
    let n2 = parseFloat(document.getElementById('note2').value);

    // التأكد أن المستخدم أدخل أرقام
    if (isNaN(n1) || isNaN(n2)) {
        document.getElementById('result').innerHTML = "يرجى إدخال جميع النقاط!";
        return;
    }

    // حساب المعدل البسيط
    let gpa = (n1 + n2) / 2;

    // إظهار النتيجة بـ رقمين وراء الفاصلة
    document.getElementById('result').innerHTML = "معدلك هو: " + gpa.toFixed(2);
}
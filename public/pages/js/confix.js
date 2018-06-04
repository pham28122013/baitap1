$("#btn-login").click(function(e) {
	var username = $("#login-username").val();
	var password = $("#login-password").val();
	if(username === "") {
		$("#login-username-error").text("Vui lòng nhập tên đăng nhập");
		e.preventDefault();
	} else {
		$("#login-username-error").text("");
	}
	if(password === "") {
		$("#login-password-error").text("Vui lòng nhập mật khẩu");
		e.preventDefault();
	} else {
		$("#login-password-error").text("");
	}
});

$("#btn-reg").click(function(e) {
	var username = $("#reg-username").val();
	var password = $("#reg-password").val();
	var rePassword = $("#reg-rePassword").val();
	if(username === "") {
		$("#reg-username-error").text("Vui lòng nhập tên đăng nhập");
		e.preventDefault();
	} else {
		$("#reg-username-error").text("");
	}
	if(password === "") {
		$("#reg-password-error").text("Vui lòng nhập mật khẩu");
		e.preventDefault();
	} else {
		$("#reg-password-error").text("");
	}

	if(rePassword === "") {
		$("#reg-rePassword-error").text("Vui lòng nhập lại mật khẩu");
		e.preventDefault();
	} else {
		$("#reg-rePassword-error").text("");
	}
	if(password !== rePassword) {
		$("#reg-rePassword-error").text("Mật khẩu nhập lại không đúng");
		e.preventDefault();
	} else {
		$("#reg-rePassword-error").text("");
	}
});
$(function() {
	"use strict";
	var t, o = "rtl" === $("html").attr("data-textdirection"),
		n = $("#type-success"),
		i = $("#type-info"),
		s = $("#type-warning"),
		a = $("#type-error"),
		e = $("#position-top-left"),
		r = $("#position-top-center"),
		c = $("#position-top-right"),
		l = $("#position-top-full"),
		u = $("#position-bottom-left"),
		h = $("#position-bottom-center"),
		f = $("#position-bottom-right"),
		m = $("#position-bottom-full"),
		d = $("#text-notification"),
		k = $("#close-button"),
		p = $("#progress-bar"),
		w = $("#clear-toast-btn"),
		y = $("#show-remove-toast"),
		g = $("#remove-toast"),
		b = $("#show-clear-toast"),
		v = $("#clear-toast"),
		B = $("#fast-duration"),
		I = $("#slow-duration"),
		M = $("#timeout"),
		T = $("#sticky"),
		C = $("#slide-toast"),
		D = $("#fade-toast");
	n.on("click", function() {
		toastr.success("Have fun storming the castle!", "Miracle Max Says", {
			closeButton: !0,
			tapToDismiss: !1,
			rtl: o
		})
	}), i.on("click", function() {
		toastr.info("We do have the Kapua suite available.", "Turtle Bay Resort", {
			closeButton: !0,
			tapToDismiss: !1,
			rtl: o
		})
	}), s.on("click", function() {
		toastr.warning("My name is Inigo Montoya. You killed my father, prepare to die!", {
			closeButton: !0,
			tapToDismiss: !1,
			rtl: o
		})
	}), a.on("click", function() {
		toastr.error("I do not think that word means what you think it means.", "Inconceivable!", {
			closeButton: !0,
			tapToDismiss: !1,
			rtl: o
		})
	}), e.on("click", function() {
		toastr.info("I do not think that word means what you think it means.", "Top Left!", {
			positionClass: "toast-top-left",
			rtl: o
		})
	}), r.on("click", function() {
		toastr.info("I do not think that word means what you think it means.", "Top Center!", {
			positionClass: "toast-top-center",
			rtl: o
		})
	}), c.on("click", function() {
		toastr.info("I do not think that word means what you think it means.", "Top Right!", {
			positionClass: "toast-top-right",
			rtl: o
		})
	}), l.on("click", function() {
		toastr.info("I do not think that word means what you think it means.", "Top Full Width!", {
			positionClass: "toast-top-full-width",
			rtl: o
		})
	}), u.on("click", function() {
		toastr.info("I do not think that word means what you think it means.", "Bottom Left!", {
			positionClass: "toast-bottom-left",
			rtl: o
		})
	}), h.on("click", function() {
		toastr.info("I do not think that word means what you think it means.", "Bottom Center!", {
			positionClass: "toast-bottom-center",
			rtl: o
		})
	}), f.on("click", function() {
		toastr.info("I do not think that word means what you think it means.", "Bottom Right!", {
			positionClass: "toast-bottom-right",
			rtl: o
		})
	}), m.on("click", function() {
		toastr.info("I do not think that word means what you think it means.", "Bottom Full Width!", {
			positionClass: "toast-bottom-full-width",
			rtl: o
		})
	}), d.on("click", function() {
		toastr.info("Have fun storming the castle!", "Miracle Max Says", {
			rtl: o
		})
	}), k.on("click", function() {
		toastr.success("Have fun storming the castle!", "With Close Button", {
			closeButton: !0,
			rtl: o
		})
	}), p.on("click", function() {
		toastr.success("Have fun storming the castle!", "Gae Iki", {
			closeButton: !0,
			tapToDismiss: !1,
			progressBar: !0,
			rtl: o
		})
	}), w.on("click", function() {
		(t = t || toastr.info('Clear itself?<br /><br /><button type="button" class="btn btn-primary clear">Yes</button>', "Clear Toast Button", {
			closeButton: !0,
			timeOut: 0,
			extendedTimeOut: 0,
			tapToDismiss: !1,
			rtl: o
		})).find(".clear").length && t.delegate(".clear", "click", function() {
			toastr.clear(t, {
				force: !0
			}), t = void 0
		})
	}), y.on("click", function() {
		toastr.info("Have fun storming the castle!", "Miracle Max Says", {
			rtl: o
		})
	}), g.on("click", function() {
		toastr.remove()
	}), b.on("click", function() {
		toastr.info("Have fun storming the castle!", "Miracle Max Says", {
			rtl: o
		})
	}), v.on("click", function() {
		toastr.clear()
	}), B.on("click", function() {
		toastr.success("Have fun storming the castle!", "Fast Duration", {
			showDuration: 500,
			rtl: o
		})
	}), I.on("click", function() {
		toastr.warning("Have fun storming the castle!", "Slow Duration", {
			hideDuration: 3e3,
			rtl: o
		})
	}), M.on("click", function() {
		toastr.error("I do not think that word means what you think it means.", "Timeout!", {
			timeOut: 5e3,
			rtl: o
		})
	}), T.on("click", function() {
		toastr.info("I do not think that word means what you think it means.", "Sticky!", {
			timeOut: 0,
			rtl: o
		})
	}), C.on("click", function() {
		toastr.success("I do not think that word means what you think it means.", "Slide Down / Slide Up!", {
			showMethod: "slideDown",
			hideMethod: "slideUp",
			timeOut: 2e3,
			rtl: o
		})
	}), D.on("click", function() {
		toastr.success("I do not think that word means what you think it means.", "Slide Down / Slide Up!", {
			showMethod: "fadeIn",
			hideMethod: "fadeOut",
			timeOut: 2e3,
			rtl: o
		})
	})
});

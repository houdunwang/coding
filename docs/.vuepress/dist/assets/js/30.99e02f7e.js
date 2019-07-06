(window.webpackJsonp=window.webpackJsonp||[]).push([[30],{275:function(e,t,a){"use strict";a.r(t);var n=a(0),r=Object(n.a)({},function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("ContentSlotsDistributor",{attrs:{"slot-key":e.$parent.slotKey}},[a("h1",{attrs:{id:"自定义blade标签"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#自定义blade标签","aria-hidden":"true"}},[e._v("#")]),e._v(" 自定义Blade标签")]),e._v(" "),a("p",[e._v("在 "),a("code",[e._v("app/Providers/AppServiceProvider.php")]),e._v(" 文件中定义")]),e._v(" "),a("div",{staticClass:"language- extra-class"},[a("pre",{pre:!0,attrs:{class:"language-text"}},[a("code",[e._v("public function boot()\n{\n\t\t\\Blade::directive('category',function($expression){\n         $php=<<<php\n            <?php\n    \\$data = \\Modules\\Article\\Entities\\Category::whereIn('id',explode(',','$expression'))->get();\n    foreach(\\$data as \\$field):\n    ?>\nphp;\n            return $php;\n        });\n        \\Blade::directive('endcategory',function(){\n            return \"<?php endforeach;?>\";\n        });\n}\n")])])]),a("p",[e._v("上面我们定义了 "),a("code",[e._v("category")]),e._v(" 与 "),a("code",[e._v("endcategory")]),e._v(" 两个标签用于遍历Category模型数据，使用方法如下：")]),e._v(" "),a("div",{staticClass:"language- extra-class"},[a("pre",{pre:!0,attrs:{class:"language-text"}},[a("code",[e._v("@category(1,2)\n        <li>{{$field['name']}}</li>\n@endcategory\n")])])])])},[],!1,null,null,null);t.default=r.exports}}]);
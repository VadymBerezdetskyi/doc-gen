## General 
**Code:** `dlocal_co_cop`  
**Method:** `dlocal`  
**Currency:** `COP` [show -->]() 
**Amount limits:** from `0.01`  to `100000`  COP ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`document_id` |✔ |`string` |`/^[0-9]{10}$/` | 
|`document_type` |✔ |`string` |`/^(NIT|CC|CE|PASS)$/` | 
|`bank_account` |✔ |`string` |`/^[0-9]{10}$/` | 
|`bank_code` |✔ |`string` |`/^[0-9]$/` | 
|`account_type` |✔ |`string` |`/^[A-Z]{1}$/` | 
|`beneficiary_name` |✔ |`string` |`/^[A-Z\-\sa-z]{2,64}$/` | 
|`beneficiary_lastname` |✔ |`string` |`/^[A-Z\-\sa-z]{2,64}$/` | 
|`address` |✔ |`string` |`/^[a-zA-Z0-9 /\_.,'-]{1,200}$/` | 
|`email` |✔ |`string` |`/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/` | 
 
### Details 
0 **`document_id` **  
Type: `string`  
Regexp: `/^[0-9]{10}$/`  
Required: `1`  
Label:  
: [en] Document ID  
: [ru] Номер документа  
: [uk] Номер документу  
Hint:  
: [en] Enter Document ID  
: [ru] Введите номер документа  
: [uk] Введіть номер документу  
1 **`document_type` **  
Type: `string`  
Regexp: `/^(NIT|CC|CE|PASS)$/`  
Required: `1`  
Label:  
: [en] Document Type  
: [ru] Тип документа  
: [uk] Тип документу  
Hint:  
: [en] Enter Document Type (NIT, CC, CE or PASS)  
: [ru] Введите тип документа (NIT, CC, CE или PASS)  
: [uk] Введіть тип документу (NIT, CC, CE або PASS)  
2 **`bank_account` **  
Type: `string`  
Regexp: `/^[0-9]{10}$/`  
Required: `1`  
Label:  
: [en] Bank Account  
: [ru] Номер банковского счета  
: [uk] Номер банківського рахунку  
Hint:  
: [en] Enter bank account  
: [ru] Введите номер банковского счета  
: [uk] Введіть номер банківського рахунку  
3 **`bank_code` **  
Type: `string`  
Regexp: `/^[0-9]$/`  
Required: `1`  
Label:  
: [en] Bank Code  
: [ru] Код банка  
: [uk] Код банку  
Hint:  
: [en] Enter bank code  
: [ru] Введите код банка  
: [uk] Введіть код банку  
4 **`account_type` **  
Type: `string`  
Regexp: `/^[A-Z]{1}$/`  
Required: `1`  
Label:  
: [en] Account type  
: [ru] Тип аккаунта  
: [uk] Тип акаунту  
Hint:  
: [en] Enter account type  
: [ru] Введите тип аккаунта  
: [uk] Введіть тип акаунту  
5 **`beneficiary_name` **  
Type: `string`  
Regexp: `/^[A-Z\-\sa-z]{2,64}$/`  
Required: `1`  
Label:  
: [en] Beneficiary first name  
: [ru] Имя получателя  
: [uk] Імʼя отримувача  
Hint:  
: [en] Enter beneficiary first name  
: [ru] Введите имя получателя  
: [uk] Введіть імʼя отримувача  
6 **`beneficiary_lastname` **  
Type: `string`  
Regexp: `/^[A-Z\-\sa-z]{2,64}$/`  
Required: `1`  
Label:  
: [en] Beneficiary last name  
: [ru] Имя получателя  
: [uk] Імʼя отримувача  
Hint:  
: [en] Enter beneficiary last name  
: [ru] Введите имя получателя  
: [uk] Введіть імʼя отримувача  
7 **`address` **  
Type: `string`  
Regexp: `/^[a-zA-Z0-9 /\_.,'-]{1,200}$/`  
Required: `1`  
Label:  
: [en] Address  
: [ru] Адрес  
: [uk] Адреса  
Hint:  
: [en] Enter address  
: [ru] Введите адрес  
: [uk] Введіть адресу  
8 **`email` **  
Type: `string`  
Regexp: `/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/`  
Required: `1`  
Label:  
: [en] Email  
: [ru] Электронная почта  
: [uk] Електронна пошта  
Hint:  
: [en] Enter email  
: [ru] Введите адрес электронной почты  
: [uk] Введіть адресу електронної пошти  
## JSON Object 
```json
 {"code":"dlocal_co_cop","method":"dlocal","currency":"COP","fields":[{"key":"document_id","regexp":"\/^[0-9]{10}$\/","type":"string","label":{"en":"Document ID","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0443"},"hint":{"en":"Enter Document ID","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0443"},"position":1,"required":true},{"key":"document_type","regexp":"\/^(NIT|CC|CE|PASS)$\/","type":"string","label":{"en":"Document Type","ru":"\u0422\u0438\u043f \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0430","uk":"\u0422\u0438\u043f \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0443"},"hint":{"en":"Enter Document Type (NIT, CC, CE or PASS)","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0442\u0438\u043f \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0430 (NIT, CC, CE \u0438\u043b\u0438 PASS)","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0442\u0438\u043f \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0443 (NIT, CC, CE \u0430\u0431\u043e PASS)"},"position":2,"required":true},{"key":"bank_account","type":"string","regexp":"\/^[0-9]{10}$\/","label":{"en":"Bank Account","ru":"\u041d\u043e\u043c\u0435\u0440 \u0431\u0430\u043d\u043a\u043e\u0432\u0441\u043a\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0431\u0430\u043d\u043a\u0456\u0432\u0441\u044c\u043a\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"hint":{"en":"Enter bank account","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0431\u0430\u043d\u043a\u043e\u0432\u0441\u043a\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0431\u0430\u043d\u043a\u0456\u0432\u0441\u044c\u043a\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"position":3,"required":true},{"key":"bank_code","type":"string","regexp":"\/^[0-9]$\/","label":{"en":"Bank Code","ru":"\u041a\u043e\u0434 \u0431\u0430\u043d\u043a\u0430","uk":"\u041a\u043e\u0434 \u0431\u0430\u043d\u043a\u0443"},"hint":{"en":"Enter bank code","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043a\u043e\u0434 \u0431\u0430\u043d\u043a\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043a\u043e\u0434 \u0431\u0430\u043d\u043a\u0443"},"position":4,"required":true},{"key":"account_type","type":"string","regexp":"\/^[A-Z]{1}$\/","label":{"en":"Account type","ru":"\u0422\u0438\u043f \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","uk":"\u0422\u0438\u043f \u0430\u043a\u0430\u0443\u043d\u0442\u0443"},"hint":{"en":"Enter account type","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0442\u0438\u043f \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0442\u0438\u043f \u0430\u043a\u0430\u0443\u043d\u0442\u0443"},"position":6,"required":true},{"key":"beneficiary_name","type":"string","label":{"en":"Beneficiary first name","ru":"\u0418\u043c\u044f \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0406\u043c\u02bc\u044f \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"hint":{"en":"Enter beneficiary first name","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u043c\u044f \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0456\u043c\u02bc\u044f \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"regexp":"\/^[A-Z\\-\\sa-z]{2,64}$\/","position":7,"required":true},{"key":"beneficiary_lastname","type":"string","label":{"en":"Beneficiary last name","ru":"\u0418\u043c\u044f \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0406\u043c\u02bc\u044f \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"hint":{"en":"Enter beneficiary last name","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u043c\u044f \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0456\u043c\u02bc\u044f \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"regexp":"\/^[A-Z\\-\\sa-z]{2,64}$\/","required":true,"position":8},{"key":"address","type":"string","regexp":"\/^[a-zA-Z0-9 \/\\_.,'-]{1,200}$\/","label":{"en":"Address","ru":"\u0410\u0434\u0440\u0435\u0441","uk":"\u0410\u0434\u0440\u0435\u0441\u0430"},"hint":{"en":"Enter address","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0430\u0434\u0440\u0435\u0441","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0430\u0434\u0440\u0435\u0441\u0443"},"required":true,"position":9},{"key":"email","type":"string","label":{"en":"Email","ru":"\u042d\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u0430\u044f \u043f\u043e\u0447\u0442\u0430","uk":"\u0415\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u0430 \u043f\u043e\u0448\u0442\u0430"},"hint":{"en":"Enter email","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0430\u0434\u0440\u0435\u0441 \u044d\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u043e\u0439 \u043f\u043e\u0447\u0442\u044b","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0430\u0434\u0440\u0435\u0441\u0443 \u0435\u043b\u0435\u043a\u0442\u0440\u043e\u043d\u043d\u043e\u0457 \u043f\u043e\u0448\u0442\u0438"},"regexp":"\/^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$\/","position":10,"required":true}],"amount_min":0.01,"amount_max":100000}```  

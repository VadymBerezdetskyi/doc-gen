## General 
**Code:** `dlocal_ar_ars`  
**Method:** `dlocal`  
**Currency:** `ARS` [show -->]() 
**Amount limits:** from `0.01`  to `100000`  ARS ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`document_id` |✔ |`string` |`/^[0-9]{11}$/` | 
|`bank_account` |✔ |`string` |`/^[0-9]{22}$/` | 
|`account_type` |✔ |`string` |`/^[A-Z]{1}$/` | 
|`beneficiary_name` |✔ |`string` |`/^[A-Z\-\sa-z]{2,64}$/` | 
|`beneficiary_lastname` |✔ |`string` |`/^[A-Z\-\sa-z]{2,64}$/` | 
 
### Details 
0 **`document_id` **  
Type: `string`  
Regexp: `/^[0-9]{11}$/`  
Required: `1`  
Label:  
: [en] Document ID  
: [ru] Номер документа  
: [uk] Номер документу  
Hint:  
: [en] Enter Document ID  
: [ru] Введите номер документа  
: [uk] Введіть номер документу  
1 **`bank_account` **  
Type: `string`  
Regexp: `/^[0-9]{22}$/`  
Required: `1`  
Label:  
: [en] Bank Account  
: [ru] Номер банковского счета  
: [uk] Номер банківського рахунку  
Hint:  
: [en] Enter bank account  
: [ru] Введите номер банковского счета  
: [uk] Введіть номер банківського рахунку  
2 **`account_type` **  
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
3 **`beneficiary_name` **  
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
4 **`beneficiary_lastname` **  
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
## JSON Object 
```json
 {"code":"dlocal_ar_ars","method":"dlocal","currency":"ARS","fields":[{"key":"document_id","regexp":"\/^[0-9]{11}$\/","type":"string","label":{"en":"Document ID","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0443"},"hint":{"en":"Enter Document ID","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0434\u043e\u043a\u0443\u043c\u0435\u043d\u0442\u0443"},"position":1,"required":true},{"key":"bank_account","type":"string","regexp":"\/^[0-9]{22}$\/","label":{"en":"Bank Account","ru":"\u041d\u043e\u043c\u0435\u0440 \u0431\u0430\u043d\u043a\u043e\u0432\u0441\u043a\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0431\u0430\u043d\u043a\u0456\u0432\u0441\u044c\u043a\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"hint":{"en":"Enter bank account","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0431\u0430\u043d\u043a\u043e\u0432\u0441\u043a\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0431\u0430\u043d\u043a\u0456\u0432\u0441\u044c\u043a\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"position":2,"required":true},{"key":"account_type","type":"string","regexp":"\/^[A-Z]{1}$\/","label":{"en":"Account type","ru":"\u0422\u0438\u043f \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","uk":"\u0422\u0438\u043f \u0430\u043a\u0430\u0443\u043d\u0442\u0443"},"hint":{"en":"Enter account type","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0442\u0438\u043f \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0442\u0438\u043f \u0430\u043a\u0430\u0443\u043d\u0442\u0443"},"position":5,"required":true},{"key":"beneficiary_name","type":"string","label":{"en":"Beneficiary first name","ru":"\u0418\u043c\u044f \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0406\u043c\u02bc\u044f \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"hint":{"en":"Enter beneficiary first name","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u043c\u044f \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0456\u043c\u02bc\u044f \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"regexp":"\/^[A-Z\\-\\sa-z]{2,64}$\/","position":6,"required":true},{"key":"beneficiary_lastname","type":"string","label":{"en":"Beneficiary last name","ru":"\u0418\u043c\u044f \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0406\u043c\u02bc\u044f \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"hint":{"en":"Enter beneficiary last name","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u043c\u044f \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0456\u043c\u02bc\u044f \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"regexp":"\/^[A-Z\\-\\sa-z]{2,64}$\/","position":7,"required":true}],"amount_min":0.01,"amount_max":100000}```  

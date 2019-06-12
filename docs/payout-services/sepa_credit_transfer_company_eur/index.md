## General 
**Code:** `sepa_credit_transfer_company_eur`  
**Method:** `sepa_credit_transfer`  
**Currency:** `EUR` [show -->]() 
**Amount limits:** from `0.01`  to `1000000`  EUR ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`company_name` |✔ |`string` |`/^(\w){3,64}$/` | 
|`iban` |✔ |`string` |`/^[A-Z]{2}(\w){13,29}$/` | 
|`descriptor` |✔ |`string` |`/^[A-z,a-z,0-9]{5,128}$/` | 
 
### Details 
0 **`company_name` **  
Type: `string`  
Regexp: `/^(\w){3,64}$/`  
Required: `1`  
Label:  
: [en] Company name  
: [ru] Название компании  
: [uk] Назва компанії  
Hint:  
: [en] Enter company name  
: [ru] Введите название компании  
: [uk] Введіть назву компанії  
1 **`iban` **  
Type: `string`  
Regexp: `/^[A-Z]{2}(\w){13,29}$/`  
Required: `1`  
Label:  
: [en] IBAN  
: [ru] IBAN  
: [uk] IBAN  
Hint:  
: [en] Enter IBAN  
: [ru] Введите IBAN  
: [uk] Введіть IBAN  
2 **`descriptor` **  
Type: `string`  
Regexp: `/^[A-z,a-z,0-9]{5,128}$/`  
Required: `1`  
Label:  
: [en] Description  
: [ru] Описание  
: [uk] Опис  
Hint:  
: [en] Enter description  
: [ru] Введите описание  
: [uk] Введіть опис  
## JSON Object 
```json
 {"code":"sepa_credit_transfer_company_eur","method":"sepa_credit_transfer","currency":"EUR","fields":[{"key":"company_name","type":"string","label":{"en":"Company name","ru":"\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0438","uk":"\u041d\u0430\u0437\u0432\u0430 \u043a\u043e\u043c\u043f\u0430\u043d\u0456\u0457"},"hint":{"en":"Enter company name","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u043a\u043e\u043c\u043f\u0430\u043d\u0438\u0438","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u0430\u0437\u0432\u0443 \u043a\u043e\u043c\u043f\u0430\u043d\u0456\u0457"},"regexp":"\/^(\\w){3,64}$\/","required":true,"position":1},{"key":"iban","type":"string","label":{"en":"IBAN","ru":"IBAN","uk":"IBAN"},"hint":{"en":"Enter IBAN","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 IBAN","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c IBAN"},"regexp":"\/^[A-Z]{2}(\\w){13,29}$\/","required":true,"position":2,"options":{"validators":[{"name":"Iban"}]}},{"key":"descriptor","type":"string","label":{"en":"Description","ru":"\u041e\u043f\u0438\u0441\u0430\u043d\u0438\u0435","uk":"\u041e\u043f\u0438\u0441"},"hint":{"en":"Enter description","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043e\u043f\u0438\u0441\u0430\u043d\u0438\u0435","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043e\u043f\u0438\u0441"},"regexp":"\/^[A-z,a-z,0-9]{5,128}$\/","required":true,"position":3}],"amount_min":0.01,"amount_max":1000000}```  

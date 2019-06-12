## General 
**Code:** `sepa_credit_transfer_individual_eur`  
**Method:** `sepa_credit_transfer`  
**Currency:** `EUR` [show -->]() 
**Amount limits:** from `0.01`  to `1000000`  EUR ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`first_name` |✔ |`string` |`/^(\w){3,64}$/` | 
|`last_name` |✔ |`string` |`/^(\w){3,64}$/` | 
|`iban` |✔ |`string` |`/^[A-Z]{2}(\w){13,29}$/` | 
|`descriptor` |✔ |`string` |`/^[A-z,a-z,0-9]{4,128}$/` | 
 
### Details 
0 **`first_name` **  
Type: `string`  
Regexp: `/^(\w){3,64}$/`  
Required: `1`  
Label:  
: [en] First name  
: [ru] Имя получателя  
: [uk] Імʼя отримувача  
Hint:  
: [en] Enter first name  
: [ru] Введите имя получателя  
: [uk] Введіть імʼя отримувача  
1 **`last_name` **  
Type: `string`  
Regexp: `/^(\w){3,64}$/`  
Required: `1`  
Label:  
: [en] Last name  
: [ru] Фамилия получателя  
: [uk] Прізвище отримувача  
Hint:  
: [en] Enter last name  
: [ru] Введите фамилию получателя  
: [uk] Введіть прізвище отримувача  
2 **`iban` **  
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
3 **`descriptor` **  
Type: `string`  
Regexp: `/^[A-z,a-z,0-9]{4,128}$/`  
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
 {"code":"sepa_credit_transfer_individual_eur","method":"sepa_credit_transfer","currency":"EUR","fields":[{"key":"first_name","type":"string","label":{"en":"First name","ru":"\u0418\u043c\u044f \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0406\u043c\u02bc\u044f \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"hint":{"en":"Enter first name","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u043c\u044f \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0456\u043c\u02bc\u044f \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"regexp":"\/^(\\w){3,64}$\/","required":true,"position":1},{"key":"last_name","type":"string","label":{"en":"Last name","ru":"\u0424\u0430\u043c\u0438\u043b\u0438\u044f \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u041f\u0440\u0456\u0437\u0432\u0438\u0449\u0435 \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"hint":{"en":"Enter last name","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0444\u0430\u043c\u0438\u043b\u0438\u044e \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043f\u0440\u0456\u0437\u0432\u0438\u0449\u0435 \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"regexp":"\/^(\\w){3,64}$\/","required":true,"position":2},{"key":"iban","type":"string","label":{"en":"IBAN","ru":"IBAN","uk":"IBAN"},"hint":{"en":"Enter IBAN","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 IBAN","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c IBAN"},"regexp":"\/^[A-Z]{2}(\\w){13,29}$\/","required":true,"position":3,"options":{"validators":[{"name":"Iban"}]}},{"key":"descriptor","type":"string","label":{"en":"Description","ru":"\u041e\u043f\u0438\u0441\u0430\u043d\u0438\u0435","uk":"\u041e\u043f\u0438\u0441"},"hint":{"en":"Enter description","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043e\u043f\u0438\u0441\u0430\u043d\u0438\u0435","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043e\u043f\u0438\u0441"},"regexp":"\/^[A-z,a-z,0-9]{4,128}$\/","required":true,"position":4}],"amount_min":0.01,"amount_max":1000000}```  

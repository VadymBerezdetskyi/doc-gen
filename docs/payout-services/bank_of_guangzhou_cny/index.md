## General 
**Code:** `bank_of_guangzhou_cny`  
**Method:** `bank_of_guangzhou`  
**Currency:** `CNY` [show -->]() 
**Amount limits:** from `60`  to `49000`  CNY ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`bank_branch` |✔ |`string` |`/^[A-z,a-z,0-9]{2,100}$/` | 
|`customer_name` |✔ |`string` |`/^[A-z,a-z,0-9]{2,100}$/` | 
|`bank_account_name` |✔ |`string` |`/^[A-z,a-z,0-9]{2,100}$/` | 
|`bank_account_number` |✔ |`string` |`/^[0-9]{5,100}$/` | 
|`province` |✔ |`string` |`/^[A-z,a-z,0-9]{2,100}$/` | 
|`city` |✔ |`string` |`/^[A-z,a-z,0-9]{2,100}$/` | 
 
### Details 
0 **`bank_branch` **  
Type: `string`  
Regexp: `/^[A-z,a-z,0-9]{2,100}$/`  
Required: `1`  
Label:  
: [en] Bank Branch  
: [ru] Bank Branch  
: [uk] Bank Branch  
Hint:  
: [en] Enter Bank Branch  
: [ru] Введите Bank Branch  
: [uk] Введіть Bank Branch  
1 **`customer_name` **  
Type: `string`  
Regexp: `/^[A-z,a-z,0-9]{2,100}$/`  
Required: `1`  
Label:  
: [en] Customer name  
: [ru] Имя покупателя  
: [uk] Ім'я клієнта  
Hint:  
: [en] Enter customer name  
: [ru] Введите имя покупателя  
: [uk] Введіть ім'я клієнта  
2 **`bank_account_name` **  
Type: `string`  
Regexp: `/^[A-z,a-z,0-9]{2,100}$/`  
Required: `1`  
Label:  
: [en] Bank Account Name  
: [ru] Bank Account Name  
: [uk] Bank Account Name  
Hint:  
: [en] Enter Bank Account Name  
: [ru] Введите Bank Account Name  
: [uk] Введіть Bank Account Name  
3 **`bank_account_number` **  
Type: `string`  
Regexp: `/^[0-9]{5,100}$/`  
Required: `1`  
Label:  
: [en] Bank Account Number  
: [ru] Bank Account Number  
: [uk] Bank Account Number  
Hint:  
: [en] Enter Bank Account Number  
: [ru] Введите Bank Account Number  
: [uk] Введіть Bank Account Number  
4 **`province` **  
Type: `string`  
Regexp: `/^[A-z,a-z,0-9]{2,100}$/`  
Required: `1`  
Label:  
: [en] Province  
: [ru] Провинция  
: [uk] Провінція  
Hint:  
: [en] Enter province  
: [ru] Введите провинцию  
: [uk] Введіть провінцію  
5 **`city` **  
Type: `string`  
Regexp: `/^[A-z,a-z,0-9]{2,100}$/`  
Required: `1`  
Label:  
: [en] City  
: [ru] Город  
: [uk] Місто  
Hint:  
: [en] Enter city  
: [ru] Введите город  
: [uk] Введіть місто  
## JSON Object 
```json
 {"code":"bank_of_guangzhou_cny","method":"bank_of_guangzhou","currency":"CNY","fields":[{"key":"bank_branch","type":"string","label":{"en":"Bank Branch","ru":"Bank Branch","uk":"Bank Branch"},"hint":{"en":"Enter Bank Branch","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 Bank Branch","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c Bank Branch"},"regexp":"\/^[A-z,a-z,0-9]{2,100}$\/","required":true,"position":1},{"key":"customer_name","type":"string","label":{"en":"Customer name","ru":"\u0418\u043c\u044f \u043f\u043e\u043a\u0443\u043f\u0430\u0442\u0435\u043b\u044f","uk":"\u0406\u043c'\u044f \u043a\u043b\u0456\u0454\u043d\u0442\u0430"},"hint":{"en":"Enter customer name","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u043c\u044f \u043f\u043e\u043a\u0443\u043f\u0430\u0442\u0435\u043b\u044f","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0456\u043c'\u044f \u043a\u043b\u0456\u0454\u043d\u0442\u0430"},"regexp":"\/^[A-z,a-z,0-9]{2,100}$\/","required":true,"position":2},{"key":"bank_account_name","type":"string","label":{"en":"Bank Account Name","ru":"Bank Account Name","uk":"Bank Account Name"},"hint":{"en":"Enter Bank Account Name","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 Bank Account Name","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c Bank Account Name"},"regexp":"\/^[A-z,a-z,0-9]{2,100}$\/","required":true,"position":3},{"key":"bank_account_number","type":"string","label":{"en":"Bank Account Number","ru":"Bank Account Number","uk":"Bank Account Number"},"hint":{"en":"Enter Bank Account Number","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 Bank Account Number","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c Bank Account Number"},"regexp":"\/^[0-9]{5,100}$\/","required":true,"position":4},{"key":"province","type":"string","label":{"en":"Province","ru":"\u041f\u0440\u043e\u0432\u0438\u043d\u0446\u0438\u044f","uk":"\u041f\u0440\u043e\u0432\u0456\u043d\u0446\u0456\u044f"},"hint":{"en":"Enter province","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u0440\u043e\u0432\u0438\u043d\u0446\u0438\u044e","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043f\u0440\u043e\u0432\u0456\u043d\u0446\u0456\u044e"},"regexp":"\/^[A-z,a-z,0-9]{2,100}$\/","required":true,"position":5},{"key":"city","type":"string","label":{"en":"City","ru":"\u0413\u043e\u0440\u043e\u0434","uk":"\u041c\u0456\u0441\u0442\u043e"},"hint":{"en":"Enter city","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0433\u043e\u0440\u043e\u0434","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043c\u0456\u0441\u0442\u043e"},"regexp":"\/^[A-z,a-z,0-9]{2,100}$\/","required":true,"position":6}],"amount_min":60,"amount_max":49000}```  

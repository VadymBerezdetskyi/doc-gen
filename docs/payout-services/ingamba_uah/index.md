## General 
**Code:** `ingamba_uah`  
**Method:** `ingamba`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `10`  to `4999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^(\w|\.| |\-|\+|@){1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^(\w|\.| |\-|\+|@){1,128}$/`  
Required: `1`  
Label:  
: [en] A billing account number  
: [uk] Номер рахунку платіжного кабінету  
: [ru] Номер счета платежного кабинета  
Hint:  
: [en] Enter a billing account number  
: [uk] Введіть номер рахунку платіжного кабінету  
: [ru] Введите номер счета платежного кабинета  
## JSON Object 
```json
 {"code":"ingamba_uah","method":"ingamba","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"A billing account number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443 \u043f\u043b\u0430\u0442\u0456\u0436\u043d\u043e\u0433\u043e \u043a\u0430\u0431\u0456\u043d\u0435\u0442\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430 \u043f\u043b\u0430\u0442\u0435\u0436\u043d\u043e\u0433\u043e \u043a\u0430\u0431\u0438\u043d\u0435\u0442\u0430"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter a billing account number","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443 \u043f\u043b\u0430\u0442\u0456\u0436\u043d\u043e\u0433\u043e \u043a\u0430\u0431\u0456\u043d\u0435\u0442\u0443","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430 \u043f\u043b\u0430\u0442\u0435\u0436\u043d\u043e\u0433\u043e \u043a\u0430\u0431\u0438\u043d\u0435\u0442\u0430"}}],"amount_min":10,"amount_max":4999}```  

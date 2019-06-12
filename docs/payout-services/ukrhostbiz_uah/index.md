## General 
**Code:** `ukrhostbiz_uah`  
**Method:** `ukrhostbiz`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
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
: [en] The order number  
: [uk] Номер замовлення  
: [ru] Номер заказа  
Hint:  
: [en] Enter the order number  
: [uk] Вкажіть Номер замовлення  
: [ru] Укажите номер заказа  
## JSON Object 
```json
 {"code":"ukrhostbiz_uah","method":"ukrhostbiz","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"The order number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0437\u0430\u043c\u043e\u0432\u043b\u0435\u043d\u043d\u044f","ru":"\u041d\u043e\u043c\u0435\u0440 \u0437\u0430\u043a\u0430\u0437\u0430"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter the order number","uk":"\u0412\u043a\u0430\u0436\u0456\u0442\u044c \u041d\u043e\u043c\u0435\u0440 \u0437\u0430\u043c\u043e\u0432\u043b\u0435\u043d\u043d\u044f","ru":"\u0423\u043a\u0430\u0436\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0437\u0430\u043a\u0430\u0437\u0430"},"example":"1290849778"}],"amount_min":2,"amount_max":14999}```  

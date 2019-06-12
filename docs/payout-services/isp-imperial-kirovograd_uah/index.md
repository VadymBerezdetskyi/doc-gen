## General 
**Code:** `isp-imperial-kirovograd_uah`  
**Method:** `isp-imperial-kirovograd`  
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
: [en] A cash account  
: [uk] Грошовий рахунок  
: [ru] Денежный счет  
Hint:  
: [en] Enter a cash account  
: [uk] Введіть грошовий рахунок  
: [ru] Введите денежный счет  
## JSON Object 
```json
 {"code":"isp-imperial-kirovograd_uah","method":"isp-imperial-kirovograd","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"A cash account","uk":"\u0413\u0440\u043e\u0448\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u0414\u0435\u043d\u0435\u0436\u043d\u044b\u0439 \u0441\u0447\u0435\u0442"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter a cash account","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0433\u0440\u043e\u0448\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0434\u0435\u043d\u0435\u0436\u043d\u044b\u0439 \u0441\u0447\u0435\u0442"},"example":"10103"}],"amount_min":2,"amount_max":14999}```  

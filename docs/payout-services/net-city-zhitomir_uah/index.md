## General 
**Code:** `net-city-zhitomir_uah`  
**Method:** `net-city-zhitomir`  
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
: [en] IP address or personal account number  
: [uk] IP адреси або номер особового рахунку  
: [ru] IP адрес или номер лицевого счета  
Hint:  
: [en] IP address or personal account number  
: [uk] IP адреси або номер особового рахунку  
: [ru] IP адрес или номер лицевого счета  
## JSON Object 
```json
 {"code":"net-city-zhitomir_uah","method":"net-city-zhitomir","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"IP address or personal account number","uk":"IP \u0430\u0434\u0440\u0435\u0441\u0438 \u0430\u0431\u043e \u043d\u043e\u043c\u0435\u0440 \u043e\u0441\u043e\u0431\u043e\u0432\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443","ru":"IP \u0430\u0434\u0440\u0435\u0441 \u0438\u043b\u0438 \u043d\u043e\u043c\u0435\u0440 \u043b\u0438\u0446\u0435\u0432\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"IP address or personal account number","uk":"IP \u0430\u0434\u0440\u0435\u0441\u0438 \u0430\u0431\u043e \u043d\u043e\u043c\u0435\u0440 \u043e\u0441\u043e\u0431\u043e\u0432\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443","ru":"IP \u0430\u0434\u0440\u0435\u0441 \u0438\u043b\u0438 \u043d\u043e\u043c\u0435\u0440 \u043b\u0438\u0446\u0435\u0432\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430"},"example":"10.1.1.1 \u0430\u0431\u043e 100001"}],"amount_min":2,"amount_max":14999}```  

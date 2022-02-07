library(tseries)
library(forecast)
library(uroot)
sales <- read.csv(file.choose()) #chon file
#head(sales)
#sales <- edit(sales)
sales_ts <- ts(sales$Order.Item.Total, start = c(2015,1,1), frequency = 365)
#autoplot(sales_ts)

#adf.test(diff(log(sales_ts)), alternative="stationary")

#adf.test(sales_ts)
sales_ts_d1 <- diff(sales_ts, differences = 1)
#adf.test(sales_ts_d1)

#sales_ts_d2<- diff(sales_ts, differences = 2)
#adf.test(sales_ts_d2)

#autoplot(sales_ts_d2)

#Pacf(sales_ts_d1) 

#Acf(sales_ts_d1)

tsMod <- Arima(y = sales_ts,order = c(6,1,4))
tsMod

#fit_arima <- auto.arima(sales_ts)
#print(summary(fit_arima))
#autoplot(fit_arima)
#forecast(fit_arima, h=12)

#summary(tsMod)

forecast(tsMod,h=12)

autoplot(forecast(tsMod,h=12))

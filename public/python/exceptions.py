def KelvinToFahrenheit(temp):
	assert (temp >= 0), "Colder than absolute zero!"
	return ((temp-273)*1.8)+32;

print KelvinToFahrenheit(273)
print KelvinToFahrenheit(505.78)
print KelvinToFahrenheit(-5)
# Adding and Removing elements

# Array creation
@dogs = ("Black Labrador", "Border Collie", "Dachsund", "German Shepherd");
print "1. \@dogs = @dogs\n";

# Add one element at the end of the array
push(@dogs, "Chihuahua");
print "2. \@dogs = @dogs\n";

# Add one element to the beginning of the array
unshift(@dogs, "Pit Bull");
print "3. \@dogs = @dogs\n";

# Remove one element from the last of the array
pop(@dogs);
print "4. \@dogs = @dogs\n";

# Remove one element from the beginning of the array
shift(@dogs);
print "5. \@dogs = @dogs\n";
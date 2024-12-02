library(rpart)
library(rpart.plot)
library(party)

print(head(readingSkills))
input.dat <- readingSkills[c(1:105),]

#construct the tree
output.tree <- ctree(nativeSpeaker~age+shoeSize+score,data = input.dat)

#plot thre tree
plot(output.tree)

#dev.off()

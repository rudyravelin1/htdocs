INSERT INTO `clients`(
    `clientFirstname`,
    `clientLastname`,
    `clientEmail`,
    `clientPassword`,
    `comment`
)
VALUES(
    'Tony',
    'Stark',
    'tony@starkent.com',
    'Iam1ronM@n',
    'I am the real Ironman'
)


UPDATE `clients` SET `clientLevel`= 3 WHERE 5



UPDATE
    inventory
SET
    invDescription =
REPLACE
    (
        invDescription,
        'Do you have 6 kids and like to go offroading? The Hummer gives you the small interiors with an engine to get you out of any muddy or rocky situation

',
        'Do you have 6 kids and like to go offroading? The Hummer gives you the spacious interiors with an engine to get you out of any muddy or rocky situation

'
    )
WHERE
    invDescription LIKE 'Do you have 6 kids and like to go offroading? The Hummer gives you the small interiors with an engine to get you out of any muddy or rocky situation%'



SELECT invModel, classificationName
FROM inventory
INNER JOIN carclassification
ON inventory.classificationId = carclassification.classificationId;



UPDATE inventory SET invImage=concat("/phpmotors", invImage),
invThumbnail=concat("/phpmotors", invThumbnail);